import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

// Configuration
const SRC_DIR = path.resolve(process.cwd(), 'public', 'images');
const OUT_DIR = path.resolve(process.cwd(), 'public', 'images', 'banners');
const WIDTH = 1800;
const HEIGHT = 680;

// Patterns to process (img1..img8 plus any img*.jpg/png)
const IMG_GLOBS = [/^img\d+\.(jpe?g|png)$/i, /^img.*\.(jpe?g|png)$/i];

async function ensureOutDir() {
  await fs.promises.mkdir(OUT_DIR, { recursive: true });
}

function isImageFile(name) {
  return IMG_GLOBS.some(re => re.test(name));
}

async function processFile(file) {
  const srcPath = path.join(SRC_DIR, file);
  const outPath = path.join(OUT_DIR, file);

  try {
    await sharp(srcPath)
      .resize(WIDTH, HEIGHT, { fit: 'cover', position: 'centre' })
      .jpeg({ quality: 90 })
      .toFile(outPath.replace(/\.(png|jpg|jpeg)$/i, '.jpg'));

    console.log(`Resized: ${file} -> ${path.relative(process.cwd(), outPath)}`);
  } catch (err) {
    console.error(`Failed to process ${file}:`, err.message || err);
  }
}

async function main() {
  console.log(`Source: ${SRC_DIR}`);
  console.log(`Output: ${OUT_DIR}`);
  console.log(`Target size: ${WIDTH}x${HEIGHT}`);

  if (!fs.existsSync(SRC_DIR)) {
    console.error('Source directory does not exist:', SRC_DIR);
    process.exit(1);
  }

  await ensureOutDir();

  const files = await fs.promises.readdir(SRC_DIR);
  const images = files.filter(isImageFile);

  if (images.length === 0) {
    console.log('No images found matching pattern in', SRC_DIR);
    return;
  }

  for (const file of images) {
    await processFile(file);
  }

  console.log('Done. Resized images are in:', OUT_DIR);
}

main().catch(err => {
  console.error(err);
  process.exit(1);
});

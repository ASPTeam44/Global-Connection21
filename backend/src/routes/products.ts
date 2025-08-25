import { Router } from 'express';

const router = Router();

// GET /api/products
router.get('/', (req, res) => {
  res.json({ data: [] });
});

export default router;

import express from 'express';
import cors from 'cors';
import productRoutes from './routes/products';

const app = express();
app.use(cors());
app.use(express.json());

app.use('/api/products', productRoutes);

const port = process.env.PORT || 4000;
app.listen(port, () => {
  console.log(`Backend running on port ${port}`);
});

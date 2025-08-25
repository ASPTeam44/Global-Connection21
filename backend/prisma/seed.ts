import { PrismaClient } from '@prisma/client';

const prisma = new PrismaClient();

async function main() {
  const category = await prisma.category.create({ data: { name: 'Electronics' } });
  const user = await prisma.user.create({ data: { email: 'buyer@example.com', password: 'secret', name: 'Buyer One' } });
  const company = await prisma.company.create({ data: { name: 'Supplier Inc', ownerId: user.id } });
  await prisma.product.create({
    data: {
      name: 'Sample Gadget',
      description: 'High quality gadget',
      price: 99.99,
      companyId: company.id,
      categoryId: category.id
    }
  });
}

main().catch(e => console.error(e)).finally(() => prisma.$disconnect());

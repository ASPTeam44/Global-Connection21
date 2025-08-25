import React from 'react';
import Link from 'next/link';

export default function Home() {
  return (
    <main className="flex flex-col items-center justify-center py-20">
      <h1 className="text-4xl font-bold text-center mb-4">Welcome to Trade Nexus</h1>
      <p className="text-lg text-center max-w-xl mb-8">Discover verified suppliers and manage RFQs in one powerful platform.</p>
      <Link href="/products" className="px-6 py-3 bg-orange-600 text-white rounded-md hover:bg-orange-700 transition">Browse Products</Link>
    </main>
  );
}

import Link from 'next/link';

export default function NavBar() {
  return (
    <nav className="w-full bg-white shadow-sm py-4 px-8 flex justify-between items-center">
      <Link href="/" className="text-xl font-semibold text-orange-600">Trade Nexus</Link>
      <div className="space-x-4">
        <Link href="/products">Products</Link>
        <Link href="/login">Login</Link>
      </div>
    </nav>
  );
}

import { Link } from "react-router-dom";
import logo from "../assets/logo.png"; // Assurez-vous d'avoir un logo dans assets

const Navbar = () => {
  return (
    <nav className="flex items-center justify-between px-8 py-4 bg-white shadow-lg fixed w-full top-0 z-50 font-bold text-lg">
      <div className="flex items-center space-x-4">
        <img src={logo} alt="Green Impact Expo" className="h-10" />
      </div>
      <div className="flex space-x-8">
        <Link to="/" className="text-lg font-semibold text-gray-800 hover:text-green-600 transition duration-300">A Propos</Link>
        <Link to="/intervenants" className="text-lg font-semibold text-gray-800 hover:text-green-600 transition duration-300">Intervenants</Link>
        <Link to="/programme" className="text-lg font-semibold text-gray-800 hover:text-green-600 transition duration-300">Programme</Link>
        <Link to="/partenaires" className="text-lg font-semibold text-gray-800 hover:text-green-600 transition duration-300">Partenaires</Link>
      </div>
      <div className="flex space-x-3">
        <button className="bg-teal-700 text-white px-4 py-2 rounded-lg text-lg font-bold hover:bg-teal-800 transition duration-300">Inscription Partenaire</button>
        <button className="bg-yellow-500 text-white px-4 py-2 rounded-lg text-lg font-bold hover:bg-yellow-600 transition duration-300">Inscription Visiteur</button>
      </div>
    </nav>
  );
};

export default Navbar;

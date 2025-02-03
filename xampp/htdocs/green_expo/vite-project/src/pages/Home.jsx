import { useState, useEffect } from "react";

const Home = () => {
  const calculateTimeLeft = () => {
    const difference = +new Date("2025-02-11T00:00:00") - +new Date();
    let timeLeft = {};

    if (difference > 0) {
      timeLeft = {
        days: Math.floor(difference / (1000 * 60 * 60 * 24)),
        hours: Math.floor((difference / (1000 * 60 * 60)) % 24),
        minutes: Math.floor((difference / 1000 / 60) % 60),
        seconds: Math.floor((difference / 1000) % 60),
      };
    }
    return timeLeft;
  };

  const [timeLeft, setTimeLeft] = useState(calculateTimeLeft());

  useEffect(() => {
    const timer = setInterval(() => {
      setTimeLeft(calculateTimeLeft());
    }, 1000);
    return () => clearInterval(timer);
  }, []);

  return (
    <div className="relative h-screen flex flex-col items-center justify-center bg-cover bg-center text-white" style={{ backgroundImage: "url('/background.jpg')" }}>
      <div className="absolute inset-0 bg-black bg-opacity-30"></div>
      <h2 className="relative text-3xl font-extrabold px-6 py-2 rounded-lg">GREEN IMPACT EXPO & SUMMIT</h2>
      <div className="relative flex space-x-6 text-4xl font-thin mt-6">
        {Object.keys(timeLeft).length > 0 ? (
          Object.entries(timeLeft).map(([unit, value]) => (
            <div key={unit} className="text-center">
              <span className="block font-bold">{String(value).padStart(2, '0')}</span>
              <span className="text-lg capitalize">{unit}</span>
            </div>
          ))
        ) : (
          <p className="text-xl font-bold">L'événement a commencé !</p>
        )}
      </div>
      <p className="relative mt-8 text-lg text-center">
        Du 11 au 13 Février, 2025 <br />
        <span className="font-bold">ANFA PARK, CASABLANCA</span> <br />
        Royaume du Maroc
      </p>
    </div>
  );
};

export default Home;

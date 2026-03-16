import React, { useState, useEffect } from 'react';
import { Shield, Camera, Home, Lock, Flame, Network, Phone, Mail, MapPin, Menu, X, ChevronRight, Star, Clock, Zap, Monitor, Music, Smartphone, Check, ChevronUp, ChevronDown, Facebook, Instagram } from 'lucide-react';
import { motion, AnimatePresence } from 'motion/react';

// --- Components ---

const Header = ({ activePage, setActivePage }: { activePage: string, setActivePage: (page: string) => void }) => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const navItems = [
    { name: 'Home', slug: 'home' },
    { name: 'Security Cameras', slug: 'security-cameras-security-on-the-spot' },
    { name: 'Home Automation', slug: 'home-automation-smart-homes-in-miami' },
    { name: 'Access Control', slug: 'access-control' },
    { name: 'Fire Systems', slug: 'fire-systems' },
    { name: 'Networking', slug: 'networking-fiber-optics' },
  ];

  return (
    <header className="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
      <div className="bg-yellow-50 py-1 px-4 text-center text-[10px] text-yellow-800 font-medium border-b border-yellow-100">
        PREVIEW MODE: This is a React simulation of your WordPress Theme. Files generated in root.
      </div>
      <nav className="container mx-auto px-4 md:px-8 py-4 flex items-center justify-between">
        <div className="flex items-center space-x-2">
          <button onClick={() => setActivePage('home')} className="flex items-center">
            <img 
              alt="Security on the Spot Logo" 
              className="h-10 md:h-12" 
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_gyCMySe6rBDd9YcgtSHL4hJ_7SLpT6waVlVB3Fl7IZLNM7-qBKJqGLFoompc_sfl1MdBQ-sgaP7cMTcydJo4vX_n6Ix_AKB9U8hehpxhJ-Zz9qdZt6-3OlOHENhVdeEkSgSq4Xfgs78cQOnfwDcrutTTKtz5IWlJd8mZsHvk-fAO-r7WrdC_QIlO6WVM-b6TYCrzMWb_q1qZdyDqprKMnz7mDVSOtOh9DY56mc0ve3dnazXZFp-sJa6lrwb9WZOf3Qme_b-rjBWR"
              referrerPolicy="no-referrer"
            />
          </button>
        </div>

        {/* Desktop Nav */}
        <div className="hidden lg:flex items-center space-x-6 text-sm font-semibold text-[#0B2447]">
          {navItems.map((item) => (
            <button
              key={item.slug}
              onClick={() => setActivePage(item.slug)}
              className={`hover:text-blue-600 transition ${activePage === item.slug ? 'text-blue-600' : ''}`}
            >
              {item.name}
            </button>
          ))}
        </div>

        <div className="flex items-center space-x-4">
          <a className="hidden sm:block text-[#0B2447] font-bold text-sm" href="tel:7868227868">
            (786) 822-7868
          </a>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-[#0B2447] hover:bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-bold transition"
          >
            Free Quote
          </button>
          
          {/* Mobile Menu Toggle */}
          <button className="lg:hidden text-[#0B2447]" onClick={() => setIsMenuOpen(!isMenuOpen)}>
            {isMenuOpen ? <X /> : <Menu />}
          </button>
        </div>
      </nav>

      {/* Mobile Menu */}
      {isMenuOpen && (
        <div className="lg:hidden bg-white border-t border-gray-100 p-4 space-y-4 shadow-xl">
          {navItems.map((item) => (
            <button
              key={item.slug}
              onClick={() => {
                setActivePage(item.slug);
                setIsMenuOpen(false);
              }}
              className="block w-full text-left font-semibold text-[#0B2447] py-2 border-b border-gray-50"
            >
              {item.name}
            </button>
          ))}
          <button 
            onClick={() => {
              setActivePage('who-we-are');
              setIsMenuOpen(false);
            }}
            className="block w-full text-left font-semibold text-[#0B2447] py-2"
          >
            Who We Are
          </button>
        </div>
      )}
    </header>
  );
};

const Footer = ({ setActivePage }: { setActivePage: (page: string) => void }) => {
  return (
    <footer className="bg-gray-900 text-white pt-16 pb-8">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
          <div>
            <img 
              alt="Security on the Spot Logo" 
              className="h-10 mb-6" 
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl5sBFB1KXm1BqSd4Ty96NnRNvqp_Uo5K78hIecgaWWJYsAzF3x_sW345bY86IfCjXg8Ns3IUASHAtxiwsjIAUIV45dPr10UOwYmfuBFdTiI7aZeGsyKDVEOzz7UtvW2ZXrwxOoGTs32I5AFc7COUR91PjGxUxwrBADjRb9jycwd_zaSYQiyg5dtff_VI3Lh_vjLCzVLcDy8j-TVQRQC9aup4BzVGOLheGXMTskUmNJQep8ii51B7HqscrYVJ8rhCyUQiIUFITuoSw"
              referrerPolicy="no-referrer"
            />
            <p className="text-gray-400 text-sm leading-relaxed mb-6">
              Security on the Spot: Providing Miami's families and businesses with high-end, reliable security solutions for over 20 years. 4.9-star rated.
            </p>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6">Quick Links</h4>
            <ul className="space-y-4 text-gray-400 text-sm">
              <li><button onClick={() => setActivePage('security-cameras')} className="hover:text-white transition">Security Cameras</button></li>
              <li><button onClick={() => setActivePage('home-automation')} className="hover:text-white transition">Home Automation</button></li>
              <li><button onClick={() => setActivePage('access-control')} className="hover:text-white transition">Access Control</button></li>
              <li><button onClick={() => setActivePage('fire-systems')} className="hover:text-white transition">Fire Systems</button></li>
              <li><button onClick={() => setActivePage('networking')} className="hover:text-white transition">Networking</button></li>
            </ul>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6">Who We Are</h4>
            <ul className="space-y-4 text-gray-400 text-sm">
              <li><button onClick={() => setActivePage('who-we-are')} className="hover:text-white transition">About Us</button></li>
              <li><button onClick={() => setActivePage('contact-us')} className="hover:text-white transition">Contact Us</button></li>
              <li><button className="hover:text-white transition">Privacy Policy</button></li>
            </ul>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6">Contact Us</h4>
            <ul className="space-y-4 text-gray-400 text-sm">
              <li className="flex items-start space-x-2">
                <MapPin className="w-5 h-5 text-blue-500 mt-1 flex-shrink-0" />
                <span>4861 NW 72nd Ave, Miami, FL 33166</span>
              </li>
              <li className="flex items-center space-x-2">
                <Phone className="w-5 h-5 text-blue-500 flex-shrink-0" />
                <a className="hover:text-white transition" href="tel:7868227868">(786) 822-7868</a>
              </li>
              <li className="flex items-center space-x-2">
                <Clock className="w-5 h-5 text-blue-500 flex-shrink-0" />
                <span>Mon-Fri: 8:00 AM – 6:00 PM</span>
              </li>
            </ul>
          </div>
        </div>
        <div className="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
          <p>© {new Date().getFullYear()} Security On The Spot • All Rights Reserved</p>
          <p className="mt-4 md:mt-0">Professional Security Solutions in Miami</p>
        </div>
      </div>
    </footer>
  );
};

// --- Page Components ---

const HomePage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <>
    {/* Hero Section */}
    <section className="relative h-[600px] flex items-center overflow-hidden">
      <div className="absolute inset-0 z-0">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/home-unv-security-camera-high-definition-outdoor-model.webp" 
          alt="Security Camera" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
        <div className="absolute inset-0 bg-gradient-to-r from-[#0B2447] via-[#0B2447]/80 to-transparent"></div>
      </div>
      
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="max-w-2xl text-white">
          <div className="inline-flex items-center space-x-2 bg-blue-600/20 text-blue-400 px-4 py-1 rounded-full text-xs font-bold mb-6 border border-blue-600/30">
            <Shield size={14} />
            <span>MIAMI'S #1 SECURITY EXPERTS</span>
          </div>
          <h1 className="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">
            HOLA <br />
            <span className="text-blue-500">Security</span> on the Spot
          </h1>
          <p className="text-xl text-gray-300 mb-10 leading-relaxed">
            Protecting Miami's families and businesses with high-end, reliable security solutions for over 20 years.
          </p>
          <div className="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <button 
              onClick={() => setActivePage('contact-us')}
              className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-bold text-lg transition shadow-lg shadow-blue-600/20"
            >
              Get a Free Quote
            </button>
            <button 
              onClick={() => setActivePage('security-cameras-security-on-the-spot')}
              className="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/20 px-8 py-4 rounded-full font-bold text-lg transition"
            >
              Explore Services
            </button>
          </div>
        </div>
      </div>
    </section>

    {/* Quick Services */}
    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-4">Our Core Services</h2>
          <p className="text-gray-600 max-w-2xl mx-auto">Comprehensive security and automation solutions tailored to your specific needs.</p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {[
            { title: 'Security Cameras', icon: <Camera />, slug: 'security-cameras-security-on-the-spot', desc: 'High-definition UNV cameras with remote access and smart alerts.' },
            { title: 'Home Automation', icon: <Home />, slug: 'home-automation-smart-homes-in-miami', desc: 'Fully integrated smart home systems for lighting, climate, and more.' },
            { title: 'Access Control', icon: <Lock />, slug: 'access-control', desc: 'Manage who enters your property with keyless entry and intercoms.' }
          ].map((service) => (
            <div key={service.slug} className="p-8 bg-slate-50 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300 group">
              <div className="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300">
                {service.icon}
              </div>
              <h3 className="text-xl font-bold text-[#0B2447] mb-4">{service.title}</h3>
              <p className="text-gray-600 mb-6 text-sm leading-relaxed">{service.desc}</p>
              <button 
                onClick={() => setActivePage(service.slug)}
                className="text-blue-600 font-bold flex items-center hover:translate-x-2 transition duration-300"
              >
                Learn More <ChevronRight size={18} />
              </button>
            </div>
          ))}
        </div>
      </div>
    </section>
  </>
);

const SecurityCamerasPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-24 relative overflow-hidden">
      <div className="absolute inset-0 opacity-30">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/restaurants-restaurant-outdoor-security-camera-scaled.jpg" 
          alt="Security Cameras" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="max-w-3xl">
          <h1 className="text-4xl md:text-6xl font-bold mb-6">Professional Security Camera Installation</h1>
          <p className="text-xl text-gray-300 mb-8">
            High-definition surveillance systems for homes and businesses in Miami. Monitor your property from anywhere in the world.
          </p>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-lg transition shadow-lg"
          >
            Get a Free Quote
          </button>
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
          <div>
            <h2 className="text-3xl font-bold text-[#0B2447] mb-6">Advanced Surveillance Technology</h2>
            <p className="text-lg text-gray-600 mb-6">
              We specialize in UNV (Uniview) security cameras, known for their exceptional image quality, reliability, and advanced features like night vision, motion detection, and AI-powered analytics.
            </p>
            <ul className="space-y-4">
              {[
                '4K Ultra HD Resolution',
                'Remote Mobile App Access',
                'Smart Motion Alerts',
                'Professional Cable Management'
              ].map((item) => (
                <li key={item} className="flex items-center space-x-3">
                  <Shield className="h-5 w-5 text-blue-600" />
                  <span className="text-gray-700 font-medium">{item}</span>
                </li>
              ))}
            </ul>
          </div>
          <div className="bg-slate-50 p-12 rounded-3xl border border-gray-100">
            <img 
              src="https://securityonthespot.com/wp-content/uploads/2025/08/surveillance-camera-isolated-on-white-background-2021-08-26-18-17-38-utc.png" 
              alt="UNV Camera" 
              className="mx-auto"
              referrerPolicy="no-referrer"
            />
          </div>
        </div>
      </div>
    </section>
  </div>
);

const HomeAutomationPage = () => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-24 relative overflow-hidden">
      <div className="absolute inset-0 opacity-30">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/home-automation-smart-homes-in-miami-miami-smart-home-control-scaled.jpg" 
          alt="Smart Home" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="max-w-3xl">
          <h1 className="text-4xl md:text-6xl font-bold mb-6">Smart Home Automation & Integration</h1>
          <p className="text-xl text-gray-300 mb-8">
            Transform your Miami residence into a fully integrated smart home. Control lighting, climate, security, and entertainment with a single touch.
          </p>
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {[
            { title: 'Lighting Control', icon: <Zap />, desc: 'Set the perfect mood and save energy with automated lighting scenes.' },
            { title: 'Climate Control', icon: <Monitor />, desc: 'Smart thermostats that learn your preferences and keep you comfortable.' },
            { title: 'Home Theater', icon: <Music />, desc: 'Immersive audio and video experiences tailored to your space.' },
            { title: 'Smart Security', icon: <Lock />, desc: 'Integrated locks, cameras, and alarms that talk to each other.' }
          ].map((item) => (
            <div key={item.title} className="p-8 bg-slate-50 rounded-3xl text-center border border-gray-100">
              <div className="text-blue-600 mb-4 flex justify-center">
                {item.icon}
              </div>
              <h3 className="font-bold text-[#0B2447] mb-2">{item.title}</h3>
              <p className="text-sm text-gray-600">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  </div>
);

const ContactPage = () => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-20">
      <div className="container mx-auto px-4 md:px-8 text-center">
        <h1 className="text-4xl md:text-6xl font-bold mb-6">Contact Us</h1>
        <p className="text-xl text-gray-300 max-w-2xl mx-auto">
          Ready to secure your property? Get in touch with Miami's security experts today.
        </p>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
          <div>
            <h2 className="text-3xl font-bold text-[#0B2447] mb-8">Get in Touch</h2>
            <div className="space-y-8">
              <div className="flex items-start space-x-4">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600">
                  <Phone size={24} />
                </div>
                <div>
                  <h3 className="font-bold text-lg text-[#0B2447]">Phone</h3>
                  <p className="text-gray-600">(786) 822-7868</p>
                </div>
              </div>
              <div className="flex items-start space-x-4">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600">
                  <Mail size={24} />
                </div>
                <div>
                  <h3 className="font-bold text-lg text-[#0B2447]">Email</h3>
                  <p className="text-gray-600">info@securityonthespot.com</p>
                </div>
              </div>
              <div className="flex items-start space-x-4">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600">
                  <MapPin size={24} />
                </div>
                <div>
                  <h3 className="font-bold text-lg text-[#0B2447]">Service Area</h3>
                  <p className="text-gray-600">Miami, FL and surrounding South Florida areas.</p>
                </div>
              </div>
            </div>
          </div>
          <div className="bg-slate-50 p-8 rounded-3xl border border-gray-100">
            <h2 className="text-2xl font-bold text-[#0B2447] mb-6">Send us a Message</h2>
            <form className="space-y-4">
              <input type="text" placeholder="Full Name" className="w-full p-4 rounded-xl border border-gray-200" />
              <input type="email" placeholder="Email Address" className="w-full p-4 rounded-xl border border-gray-200" />
              <textarea placeholder="Message" rows={4} className="w-full p-4 rounded-xl border border-gray-200"></textarea>
              <button className="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-700 transition">
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
);

const WhoWeArePage = () => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-24 relative overflow-hidden">
      <div className="absolute inset-0 opacity-20">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" 
          alt="Background" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10 text-center">
        <h1 className="text-4xl md:text-6xl font-bold mb-6">Who We Are</h1>
        <p className="text-xl text-gray-300 max-w-3xl mx-auto">
          Miami's premier security installation experts, dedicated to protecting what matters most to you.
        </p>
      </div>
    </section>
    
    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <div>
            <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-6">Our Mission</h2>
            <p className="text-lg text-gray-600 mb-6 leading-relaxed">
              At Security on the Spot, we believe that safety is a fundamental right. Our mission is to provide high-quality, reliable, and innovative security solutions to the Miami community and beyond.
            </p>
            <p className="text-lg text-gray-600 leading-relaxed">
              With years of experience in the industry, we have built a reputation for excellence, professionalism, and unparalleled customer service.
            </p>
          </div>
          <img 
            src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" 
            alt="Our Team" 
            className="rounded-3xl shadow-2xl"
            referrerPolicy="no-referrer"
          />
        </div>
      </div>
    </section>
  </div>
);

// --- Main App ---

export default function App() {
  const [activePage, setActivePage] = useState('home');

  // Scroll to top when page changes
  useEffect(() => {
    window.scrollTo(0, 0);
  }, [activePage]);

  const renderPage = () => {
    switch (activePage) {
      case 'home': return <HomePage setActivePage={setActivePage} />;
      case 'security-cameras-security-on-the-spot': return <SecurityCamerasPage setActivePage={setActivePage} />;
      case 'home-automation-smart-homes-in-miami': return <HomeAutomationPage />;
      case 'contact-us': return <ContactPage />;
      case 'who-we-are': return <WhoWeArePage />;
      case 'access-control': return (
        <div className="py-32 text-center text-[#0B2447]">
          <h1 className="text-4xl font-bold">Access Control Page Simulation</h1>
          <p className="mt-4 text-gray-600">This design is already coded in your page-access-control.php file.</p>
          <button onClick={() => setActivePage('home')} className="mt-8 text-blue-600 font-bold underline">Back to Home</button>
        </div>
      );
      case 'fire-systems': return (
        <div className="py-32 text-center text-[#0B2447]">
          <h1 className="text-4xl font-bold">Fire Systems Page Simulation</h1>
          <p className="mt-4 text-gray-600">This design is already coded in your page-fire-systems.php file.</p>
          <button onClick={() => setActivePage('home')} className="mt-8 text-blue-600 font-bold underline">Back to Home</button>
        </div>
      );
      case 'networking-fiber-optics': return (
        <div className="py-32 text-center text-[#0B2447]">
          <h1 className="text-4xl font-bold">Networking Page Simulation</h1>
          <p className="mt-4 text-gray-600">This design is already coded in your page-networking-fiber-optics.php file.</p>
          <button onClick={() => setActivePage('home')} className="mt-8 text-blue-600 font-bold underline">Back to Home</button>
        </div>
      );
      default: return <HomePage setActivePage={setActivePage} />;
    }
  };

  return (
    <div className="min-h-screen bg-white font-sans selection:bg-blue-100 selection:text-blue-900">
      <Header activePage={activePage} setActivePage={setActivePage} />
      
      <main>
        <AnimatePresence mode="wait">
          <motion.div
            key={activePage}
            initial={{ opacity: 0, x: 20 }}
            animate={{ opacity: 1, x: 0 }}
            exit={{ opacity: 0, x: -20 }}
            transition={{ duration: 0.3 }}
          >
            {renderPage()}
          </motion.div>
        </AnimatePresence>
      </main>

      <Footer setActivePage={setActivePage} />
    </div>
  );
}

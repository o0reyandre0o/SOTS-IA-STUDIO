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
    { name: 'Audio & Video', slug: 'audio-video-services' },
    { name: 'Video Walls', slug: 'video-wall-installation' },
  ];

  return (
    <header className="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
      <div className="bg-red-600 py-2 px-4 text-center text-xs text-white font-bold border-b border-red-700 animate-pulse">
        PREVIEW UPDATED (v1.0.12): Expanded Content for All Internal Pages.
      </div>
      <nav className="container mx-auto px-4 md:px-8 py-4 flex items-center justify-between">
        <div className="flex items-center space-x-2">
          <button onClick={() => setActivePage('home')} className="flex items-center">
            <img 
              alt="Security on the Spot Logo" 
              className="h-8 md:h-14 w-auto object-contain" 
              src="https://securityonthespot.com/wp-content/uploads/2025/08/security-on-the-spot-logo-6.webp"
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

        <div className="flex items-center space-x-1 md:space-x-4">
          <a className="hidden sm:block text-[#0B2447] font-bold text-sm" href="tel:7868227868">
            (786) 822-7868
          </a>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-[#0B2447] hover:bg-blue-600 text-white px-3 md:px-6 py-2 rounded-full text-[10px] md:text-sm font-bold transition whitespace-nowrap"
          >
            Free Quote
          </button>
          
          {/* Mobile Menu Toggle */}
          <button 
            className="lg:hidden text-[#0B2447] p-2 bg-gray-100 rounded-lg flex-shrink-0 ml-1" 
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            aria-label="Toggle Menu"
          >
            {isMenuOpen ? <X size={20} /> : <Menu size={20} />}
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
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
          <div>
            <img 
              alt="Security on the Spot Logo" 
              className="h-10 md:h-12 mb-6 object-contain" 
              src="https://securityonthespot.com/wp-content/uploads/2025/08/security-on-the-spot-logo-6.webp"
              referrerPolicy="no-referrer"
            />
            <p className="text-gray-400 text-sm leading-relaxed mb-6">
              Security on the Spot: Providing Miami's families and businesses with high-end, reliable security solutions for over 20 years. 4.9-star rated.
            </p>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6">Quick Links</h4>
            <ul className="space-y-4 text-gray-400 text-sm">
              <li><button onClick={() => setActivePage('security-cameras-security-on-the-spot')} className="hover:text-white transition">Security Cameras</button></li>
              <li><button onClick={() => setActivePage('home-automation-smart-homes-in-miami')} className="hover:text-white transition">Home Automation</button></li>
              <li><button onClick={() => setActivePage('access-control')} className="hover:text-white transition">Access Control</button></li>
              <li><button onClick={() => setActivePage('fire-systems')} className="hover:text-white transition">Fire Systems</button></li>
              <li><button onClick={() => setActivePage('networking-fiber-optics')} className="hover:text-white transition">Networking</button></li>
              <li><button onClick={() => setActivePage('audio-video-services')} className="hover:text-white transition">Audio & Video</button></li>
              <li><button onClick={() => setActivePage('video-wall-installation')} className="hover:text-white transition">Video Wall Installation</button></li>
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
    <section className="relative min-h-[550px] md:h-[700px] flex items-center py-12 md:py-0 overflow-hidden">
      <div className="absolute inset-0 z-0">
        <video 
          autoPlay 
          muted 
          loop 
          playsInline
          className="w-full h-full object-cover"
        >
          <source src="https://assets.mixkit.co/videos/preview/mixkit-security-camera-moving-and-recording-4004-large.mp4" type="video/mp4" />
        </video>
        <div className="absolute inset-0 bg-gradient-to-r from-[#0B2447] via-[#0B2447]/95 md:via-[#0B2447]/90 to-transparent"></div>
      </div>
      
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="max-w-3xl text-white">
          <div className="inline-flex items-center space-x-2 bg-blue-600/30 text-blue-300 px-4 py-1.5 rounded-full text-[10px] md:text-xs font-bold mb-6 border border-blue-500/40">
            <Shield size={14} />
            <span>MIAMI'S #1 SECURITY CAMERA & SMART HOME EXPERTS</span>
          </div>
          <h1 className="text-3xl md:text-7xl font-extrabold mb-6 leading-tight">
            Professional <br className="hidden md:block" />
            <span className="text-blue-500">Security Camera Installation</span> in Miami
          </h1>
          <p className="text-base md:text-xl text-gray-300 mb-8 leading-relaxed">
            Protecting Miami's families and businesses with high-end, reliable security solutions for over 20 years. From <strong>CCTV systems</strong> to <strong>smart home integration</strong>, we are your local experts.
          </p>
          <div className="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <button 
              onClick={() => setActivePage('contact-us')}
              className="bg-blue-600 hover:bg-blue-700 text-white px-6 md:px-8 py-3 md:py-4 rounded-full font-bold text-sm md:text-lg transition shadow-lg shadow-blue-600/20"
            >
              Get a Free Quote — (786) 822-7868
            </button>
            <button 
              onClick={() => setActivePage('security-cameras-security-on-the-spot')}
              className="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/20 px-6 md:px-8 py-3 md:py-4 rounded-full font-bold text-sm md:text-lg transition"
            >
              Explore Our Services
            </button>
          </div>
        </div>
      </div>
    </section>

    {/* Trust Bar */}
    <section className="py-10 md:py-12 bg-white border-b border-gray-100">
      <div className="container mx-auto px-4">
        <p className="text-center text-gray-500 uppercase tracking-widest text-[10px] md:text-sm font-bold mb-8">Trusted by Leading Brands & Homeowners in Miami</p>
        <div className="flex flex-wrap justify-center items-center gap-6 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition duration-500">
          <img alt="Partner Logo" className="h-6 md:h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCd_iQqVslxsiDSq-_X8LrTSasRfkMp0rD3nZK0L4d6OhuHRinNFoKDPwnnb7jWBv92U7Qjffl-DFABdUGe8Ru7-Neo1t9KBQ6tgTdH_dUWbQ7_QbEG7p14CDfUYMd3QnBUmB9cSwem-x3Kt_H1mVjo24YfK3OaHsLfSVDf6ga2ZTyTE8IBCoV0DRoOUtWADQ-aGiG81UIx-pHPBSrh4OOvYuMorRtKeL8bW7gX9DHUvNtgODEKbhIzQzNsCxu1cbzWmEQGWyEGyD8x" referrerPolicy="no-referrer" />
          <img alt="Partner Logo" className="h-6 md:h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAexWnInQIk2--6wKSE7_9fnuqBZT-WzKAoeoHv0Mu9lpOyeJ2BiyAQtJ-gPrfwf9pGYs8kM6vgPbHC5z4J_ptt7E0RX_5HajgRvf74_kwJVGZsO47zq-HnYUcirikAaA3RAZ59wEPPSjeV87NSm02K7OWEtNgZHeYLMZU_SojcSjpuZVtafcI33CK1dTiWFZYD28chy9PsjEbJysyoy6vV5kZ0PL2B_QQqD055yzmamhlunDlHNflLyDZ-aAtmi7uM-OAjzZW6iYM_" referrerPolicy="no-referrer" />
          <img alt="Partner Logo" className="h-6 md:h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDuRe6AwXLBxpLgo5mhoDtfNRIDhHL4nCxTdT1pYQ169q9Euy9qAtp5iTPElKy9fxju75bkKYYOMh1r8AGQqNMYtiOdYrN9xCLhG5C7bw5jVLx-vphBGuapiE4hm25IBrfmhDj8s8OiyP3_eiNUt6JdsB5yRsXWrTr8AmWOWCLj0-YVCPnXyIjEednzsYSzSW0ybEgVBjo2zJ8yb4v1ZW5CiFKqQuI0OAzB8AMqqTTl-gwZcwMhdVPACVmWl4fmzMkXmW2txXOZERUb" referrerPolicy="no-referrer" />
        </div>
      </div>
    </section>

    {/* Stats Section */}
    <section className="py-8 md:py-12 bg-[#0B2447] border-y border-white/10">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
          <div className="text-center">
            <div className="text-2xl md:text-3xl font-bold text-white mb-1">20+</div>
            <div className="text-[10px] md:text-xs text-blue-400 font-bold uppercase tracking-wider">Years Experience</div>
          </div>
          <div className="text-center">
            <div className="text-2xl md:text-3xl font-bold text-white mb-1">5k+</div>
            <div className="text-[10px] md:text-xs text-blue-400 font-bold uppercase tracking-wider">Satisfied Clients</div>
          </div>
          <div className="text-center">
            <div className="text-2xl md:text-3xl font-bold text-white mb-1">4.9/5</div>
            <div className="text-[10px] md:text-xs text-blue-400 font-bold uppercase tracking-wider">Google Rating</div>
          </div>
          <div className="text-center">
            <div className="text-2xl md:text-3xl font-bold text-white mb-1">24/7</div>
            <div className="text-[10px] md:text-xs text-blue-400 font-bold uppercase tracking-wider">Local Support</div>
          </div>
        </div>
      </div>
    </section>

    {/* Services Grid */}
    <section className="py-16 md:py-24 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="flex flex-col md:flex-row md:items-end justify-between mb-12 md:mb-16">
          <div className="max-w-2xl">
            <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-4">Miami’s Comprehensive Security & Technology Solutions</h2>
            <p className="text-gray-600 text-sm md:text-base">We design, install, and maintain state-of-the-art security systems for every type of property. From <strong>restaurant CCTV</strong> to <strong>home theater installation in Miami</strong>.</p>
          </div>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
          {[
            { title: 'Security Camera Installation', icon: <Camera />, slug: 'security-cameras-security-on-the-spot', desc: 'High-definition UNV cameras with remote access and smart alerts. Best for homes and small businesses in Miami.' },
            { title: 'Home Automation Near Me', icon: <Home />, slug: 'home-automation-smart-homes-in-miami', desc: 'Fully integrated smart home systems for lighting, climate, and more. Control everything from your phone.' },
            { title: 'Access Control Systems', icon: <Lock />, slug: 'access-control', desc: 'Manage who enters your property with keyless entry, intercom installation in Miami, and mag-locks.' },
            { title: 'Commercial Fire Alarms', icon: <Flame />, slug: 'fire-systems', desc: 'Certified commercial fire alarm installation in Miami. Professional monitoring and compliance.' },
            { title: 'Networking & Fiber', icon: <Network />, slug: 'networking-fiber-optics', desc: 'Structured cabling and robust Wi-Fi networks. High-speed connectivity for homes and businesses.' },
            { title: 'Audio & Video Services', icon: <Music />, slug: 'audio-video-services', desc: 'Home theater installation in Miami and video walls in South Florida. Immersive entertainment.' }
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

    {/* Why Choose Us */}
    <section className="py-16 md:py-24 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="flex flex-col lg:flex-row items-center gap-12 md:gap-16">
          <div className="lg:w-1/2 w-full">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="Security Experts Miami" className="rounded-3xl shadow-2xl w-full object-cover h-64 md:h-auto" referrerPolicy="no-referrer" />
          </div>
          <div className="lg:w-1/2 w-full">
            <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-6">Why Miami Trusts Security on the Spot</h2>
            <p className="text-gray-600 mb-8 text-base md:text-lg">With over two decades of experience, we have become the go-to provider for <strong>security cameras in Miami</strong> and <strong>smart home integration</strong>. Our commitment to quality and local expertise sets us apart.</p>
            <div className="space-y-6">
              {[
                { title: 'Local Miami Experts', desc: 'We know Miami-Dade and the specific security needs of South Florida residents.', icon: <Check /> },
                { title: 'Fast, Professional Installation', desc: 'Our technicians are highly trained for clean, efficient, and robust setups.', icon: <Zap /> },
                { title: '3-Year Total Guarantee', desc: 'We stand behind our work with a comprehensive warranty on parts and labor.', icon: <Shield /> }
              ].map((item) => (
                <div key={item.title} className="flex items-start space-x-4">
                  <div className="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-600 flex-shrink-0">
                    {item.icon}
                  </div>
                  <div>
                    <h4 className="font-bold text-[#0B2447]">{item.title}</h4>
                    <p className="text-sm text-gray-500">{item.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>

    {/* Final CTA */}
    <section className="py-16 md:py-24 bg-[#0B2447] relative overflow-hidden text-center">
      <div className="container mx-auto px-4 relative z-10">
        <h2 className="text-3xl md:text-6xl font-bold text-white mb-6 leading-tight">Ready to Secure Your Property?</h2>
        <p className="text-gray-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto">Join thousands of satisfied customers in Miami. Get your free security consultation today.</p>
        <button 
          onClick={() => setActivePage('contact-us')}
          className="bg-blue-600 hover:bg-blue-700 text-white px-8 md:px-12 py-4 md:py-6 rounded-full font-bold text-xl md:text-2xl transition shadow-xl inline-block"
        >
          Call Now: (786) 822-7868
        </button>
      </div>
      <div className="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>
      <div className="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>
    </section>
  </>
);

const SecurityCamerasPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <div className="animate-in fade-in duration-500">
    <section className="relative min-h-[350px] md:h-[500px] flex items-center py-12 md:py-0 overflow-hidden">
      <div className="absolute inset-0 z-0">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/restaurants-restaurant-outdoor-security-camera-scaled.jpg" 
          alt="Security Camera Installation Miami" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
        <div className="absolute inset-0 bg-[#0B2447]/80"></div>
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10 text-white">
        <h1 className="text-3xl md:text-6xl font-bold mb-4 md:mb-6 leading-tight">Best Security Camera Installation in Miami</h1>
        <p className="text-base md:text-xl text-gray-300 max-w-2xl mb-8">
          High-definition surveillance systems for homes, restaurants, and small businesses. Monitor your property 24/7 from anywhere.
        </p>
        <button 
          onClick={() => setActivePage('contact-us')}
          className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-bold transition shadow-lg inline-block"
        >
          Get a Free Quote
        </button>
      </div>
    </section>

    <section className="py-12 md:py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16 items-center">
          <div>
            <h2 className="text-2xl md:text-3xl font-bold text-[#0B2447] mb-6">Professional CCTV & Surveillance Solutions</h2>
            <p className="text-sm md:text-lg text-gray-600 mb-6 leading-relaxed">
              Looking for <strong>security camera installation near me</strong>? Security on the Spot provides top-tier <strong>CCTV security camera installation in Miami</strong>. We specialize in UNV (Uniview) technology, offering crystal-clear 4K resolution and advanced AI analytics.
            </p>
            <p className="text-sm md:text-lg text-gray-600 mb-8 leading-relaxed">
              Whether you need <strong>best security cameras for small business</strong> or a robust system for a large warehouse, our team ensures every corner is covered.
            </p>
            <ul className="space-y-4">
              {[
                '4K Ultra HD Surveillance Cameras',
                'Remote Mobile App Monitoring',
                'Smart Motion & AI Human Detection',
                'Weatherproof & Vandal-Resistant Designs'
              ].map((item) => (
                <li key={item} className="flex items-center space-x-3">
                  <Shield className="h-5 w-5 text-blue-600" />
                  <span className="text-gray-700 font-medium text-sm md:text-base">{item}</span>
                </li>
              ))}
            </ul>
          </div>
          <div className="bg-white p-6 md:p-12 rounded-3xl border border-gray-100 shadow-sm">
            <img 
              src="https://securityonthespot.com/wp-content/uploads/2025/08/surveillance-camera-isolated-on-white-background-2021-08-26-18-17-38-utc.png" 
              alt="CCTV Camera Miami" 
              className="mx-auto max-h-[300px] md:max-h-none object-contain"
              referrerPolicy="no-referrer"
            />
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <h2 className="text-3xl font-bold text-[#0B2447] text-center mb-16">Tailored Surveillance for Every Need</h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {[
            { title: 'Restaurant CCTV', desc: 'Protect your staff and assets with specialized restaurant security systems. Monitor dining areas and kitchens in real-time.' },
            { title: 'Small Business Security', desc: 'We offer the best security cameras for retail stores and offices, helping you prevent loss and improve safety.' },
            { title: 'Residential Surveillance', desc: 'Peace of mind for your family with outdoor security camera miami setups and smart doorbell integration.' }
          ].map((item) => (
            <div key={item.title} className="bg-white p-8 rounded-2xl shadow-sm border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
              <h3 className="text-xl font-bold text-[#0B2447] mb-4 group-hover:text-blue-600 transition-colors">{item.title}</h3>
              <p className="text-gray-600 text-sm">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="order-2 lg:order-1">
            <img 
              src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&q=80&w=1000" 
              alt="Security Monitoring" 
              className="rounded-3xl shadow-2xl"
              referrerPolicy="no-referrer"
            />
          </div>
          <div className="order-1 lg:order-2">
            <h2 className="text-3xl font-bold text-[#0B2447] mb-8">Advanced Monitoring Features</h2>
            <div className="space-y-6">
              {[
                { title: 'Remote Access', desc: 'View your cameras from anywhere in the world using our secure mobile app.' },
                { title: 'Night Vision', desc: 'Crystal clear imagery even in total darkness with advanced IR technology.' },
                { title: 'Cloud Storage', desc: 'Securely back up your footage to the cloud for extra protection.' },
                { title: 'AI Analytics', desc: 'Smart detection for people, vehicles, and specific events to reduce false alarms.' }
              ].map((feature) => (
                <div key={feature.title} className="flex space-x-4 p-4 rounded-2xl hover:bg-blue-50 transition-colors group">
                  <div className="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <Shield size={24} />
                  </div>
                  <div>
                    <h4 className="font-bold text-[#0B2447]">{feature.title}</h4>
                    <p className="text-sm text-gray-600">{feature.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-[#0B2447] text-white">
      <div className="container mx-auto px-4 md:px-8 text-center">
        <h2 className="text-3xl md:text-4xl font-bold mb-8">Ready to Secure Your Property?</h2>
        <p className="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">Join hundreds of satisfied Miami business owners and residents who trust Security on the Spot.</p>
        <button 
          onClick={() => setActivePage('contact-us')}
          className="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-full font-bold text-lg transition shadow-xl"
        >
          Schedule a Free Site Survey
        </button>
      </div>
    </section>
  </div>
);

const HomeAutomationPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <div className="animate-in fade-in duration-500">
    <section className="relative min-h-[350px] md:h-[500px] flex items-center py-12 md:py-0 overflow-hidden">
      <div className="absolute inset-0 z-0">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/home-automation-smart-homes-in-miami-miami-smart-home-control-scaled.jpg" 
          alt="Home Automation Miami" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
        <div className="absolute inset-0 bg-[#0B2447]/80"></div>
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10 text-white">
        <h1 className="text-3xl md:text-6xl font-bold mb-4 md:mb-6 leading-tight">Smart Home Automation Miami</h1>
        <p className="text-base md:text-xl text-gray-300 max-w-2xl mb-8">
          Experience the future of living with <strong>smart home integration in Miami</strong>. Control your entire home from a single interface.
        </p>
        <button 
          onClick={() => setActivePage('contact-us')}
          className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-bold transition shadow-lg inline-block"
        >
          Consult an Expert
        </button>
      </div>
    </section>

    <section className="py-12 md:py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16 items-center">
          <div>
            <h2 className="text-2xl md:text-3xl font-bold text-[#0B2447] mb-6">Miami's Top-Rated Home Automation Installers</h2>
            <p className="text-sm md:text-lg text-gray-600 mb-6 leading-relaxed">
              Searching for <strong>home automation installers near me</strong>? Security on the Spot is your premier <strong>smart home integrator</strong> in South Florida. We bring comfort, security, and efficiency together.
            </p>
            <p className="text-sm md:text-lg text-gray-600 mb-8 leading-relaxed">
              From <strong>smart home lighting control in Florida</strong> to integrated climate and security systems, we design solutions that fit your lifestyle perfectly.
            </p>
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
              {[
                'Smart Lighting Control',
                'Climate Integration',
                'Automated Shades',
                'Whole Home Audio'
              ].map((item) => (
                <div key={item} className="flex items-start space-x-3">
                  <Check className="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" />
                  <span className="text-gray-700 font-medium text-sm md:text-base">{item}</span>
                </div>
              ))}
            </div>
          </div>
          <div className="relative mt-8 lg:mt-0">
            <img 
              src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" 
              alt="Smart Home System Miami" 
              className="rounded-3xl shadow-xl w-full object-cover h-64 md:h-auto border-4 border-white"
              referrerPolicy="no-referrer"
            />
            <div className="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hidden md:block">
              <div className="text-blue-600 font-bold text-2xl">100%</div>
              <div className="text-gray-500 text-xs uppercase font-bold">Integrated</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <h2 className="text-3xl font-bold text-[#0B2447] text-center mb-16">Smart Solutions for Modern Miami Living</h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {[
            { title: 'Smart Lighting Control', desc: 'Automate your smart home lighting control in Florida. Save energy and create the perfect ambiance with custom scenes.' },
            { title: 'Voice Control Integration', desc: 'Control your smart home miami with your voice. Seamless integration with Alexa, Google Home, and Siri.' },
            { title: 'Energy Automation', desc: 'Optimize your home\'s energy usage with smart thermostats and automated shade control.' }
          ].map((item) => (
            <div key={item.title} className="bg-white p-8 rounded-2xl shadow-sm border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
              <h3 className="text-xl font-bold text-[#0B2447] mb-4 group-hover:text-blue-600 transition-colors">{item.title}</h3>
              <p className="text-gray-600 text-sm">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="bg-[#0B2447] rounded-[3rem] p-8 md:p-16 text-white relative overflow-hidden">
          <div className="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold mb-6">The Benefits of a Smart Home</h2>
              <p className="text-gray-300 mb-8">Investing in home automation isn't just about luxury—it's about creating a more efficient, secure, and comfortable environment for your family.</p>
              <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
                {[
                  { title: 'Convenience', desc: 'Control everything from your phone or voice.' },
                  { title: 'Security', desc: 'Integrated alarms and smart locks.' },
                  { title: 'Efficiency', desc: 'Reduce energy bills with smart climate.' },
                  { title: 'Value', desc: 'Increase your property\'s market value.' }
                ].map((benefit) => (
                  <div key={benefit.title} className="bg-white/10 p-6 rounded-2xl backdrop-blur-sm">
                    <h4 className="font-bold mb-2">{benefit.title}</h4>
                    <p className="text-xs text-gray-400">{benefit.desc}</p>
                  </div>
                ))}
              </div>
            </div>
            <div className="hidden lg:block">
              <img 
                src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&q=80&w=800" 
                alt="Smart Home Interface" 
                className="rounded-3xl shadow-2xl rotate-3"
                referrerPolicy="no-referrer"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8 text-center">
        <h2 className="text-3xl font-bold text-[#0B2447] mb-12">Our Integration Partners</h2>
        <div className="flex flex-wrap justify-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
          {['Control4', 'Lutron', 'Savant', 'Crestron', 'Sonos'].map((brand) => (
            <span key={brand} className="text-2xl md:text-4xl font-black text-[#0B2447]">{brand}</span>
          ))}
        </div>
      </div>
    </section>
  </div>
);

const ContactPage = () => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-16 md:py-20">
      <div className="container mx-auto px-4 md:px-8 text-center">
        <h1 className="text-3xl md:text-6xl font-bold mb-6">Contact Us</h1>
        <p className="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
          Ready to secure your property? Get in touch with Miami's security experts today.
        </p>
      </div>
    </section>

    <section className="py-12 md:py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
          <div>
            <h2 className="text-2xl md:text-3xl font-bold text-[#0B2447] mb-8">Get in Touch</h2>
            <div className="space-y-6 md:space-y-8">
              <div className="flex items-start space-x-4">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600 flex-shrink-0">
                  <Phone size={20} className="md:w-6 md:h-6" />
                </div>
                <div>
                  <h3 className="font-bold text-base md:text-lg text-[#0B2447]">Phone</h3>
                  <p className="text-gray-600 text-sm md:text-base">(786) 822-7868</p>
                </div>
              </div>
              <div className="flex items-start space-x-4">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600 flex-shrink-0">
                  <Mail size={20} className="md:w-6 md:h-6" />
                </div>
                <div>
                  <h3 className="font-bold text-base md:text-lg text-[#0B2447]">Email</h3>
                  <p className="text-gray-600 text-sm md:text-base">info@securityonthespot.com</p>
                </div>
              </div>
              <div className="flex items-start space-x-4">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600 flex-shrink-0">
                  <MapPin size={20} className="md:w-6 md:h-6" />
                </div>
                <div>
                  <h3 className="font-bold text-base md:text-lg text-[#0B2447]">Service Area</h3>
                  <p className="text-gray-600 text-sm md:text-base">Miami, FL and surrounding South Florida areas.</p>
                </div>
              </div>
            </div>
          </div>
          <div className="bg-slate-50 p-6 md:p-8 rounded-3xl border border-gray-100 mt-8 lg:mt-0">
            <h2 className="text-xl md:text-2xl font-bold text-[#0B2447] mb-6">Send us a Message</h2>
            <form className="space-y-4">
              <input type="text" placeholder="Full Name" className="w-full p-4 rounded-xl border border-gray-200 text-sm md:text-base" />
              <input type="email" placeholder="Email Address" className="w-full p-4 rounded-xl border border-gray-200 text-sm md:text-base" />
              <textarea placeholder="Message" rows={4} className="w-full p-4 rounded-xl border border-gray-200 text-sm md:text-base"></textarea>
              <button className="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-700 transition text-sm md:text-base">
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
    <section className="bg-[#0B2447] text-white py-16 md:py-24 relative overflow-hidden">
      <div className="absolute inset-0 opacity-20">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" 
          alt="Background" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10 text-center">
        <h1 className="text-3xl md:text-6xl font-bold mb-6">Who We Are</h1>
        <p className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto">
          Miami's premier security installation experts, dedicated to protecting what matters most to you.
        </p>
      </div>
    </section>
    
    <section className="py-16 md:py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 items-center">
          <div>
            <h2 className="text-2xl md:text-4xl font-bold text-[#0B2447] mb-6">Our Mission</h2>
            <p className="text-base md:text-lg text-gray-600 mb-6 leading-relaxed">
              At Security on the Spot, we believe that safety is a fundamental right. Our mission is to provide high-quality, reliable, and innovative security solutions to the Miami community and beyond.
            </p>
            <p className="text-base md:text-lg text-gray-600 leading-relaxed">
              With years of experience in the industry, we have built a reputation for excellence, professionalism, and unparalleled customer service.
            </p>
          </div>
          <img 
            src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" 
            alt="Our Team" 
            className="rounded-3xl shadow-2xl w-full object-cover h-64 md:h-auto"
            referrerPolicy="no-referrer"
          />
        </div>
      </div>
    </section>
  </div>
);

const AccessControlPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-12 md:py-24 relative overflow-hidden">
      <div className="absolute inset-0 opacity-30">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/access-control-systems-miami-keyless-entry-installation-scaled.jpg" 
          alt="Access Control" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="max-w-3xl">
          <h1 className="text-3xl md:text-6xl font-bold mb-6 leading-tight">Access Control Systems Miami</h1>
          <p className="text-base md:text-xl text-gray-300 mb-8">
            Secure your property with advanced keyless entry, intercoms, and managed access solutions.
          </p>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-full transition shadow-lg"
          >
            Secure Your Property
          </button>
        </div>
      </div>
    </section>

    <section className="py-16 md:py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
          <div className="p-8 bg-white shadow-sm rounded-3xl border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
            <h3 className="text-xl font-bold text-[#0B2447] mb-4 group-hover:text-blue-600 transition-colors">Keyless Entry</h3>
            <p className="text-gray-600 text-sm">Fob and mobile-based access for employees and residents. No more lost keys.</p>
          </div>
          <div className="p-8 bg-white shadow-sm rounded-3xl border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
            <h3 className="text-xl font-bold text-[#0B2447] mb-4 group-hover:text-blue-600 transition-colors">Intercom Systems</h3>
            <p className="text-gray-600 text-sm">Video intercom installation in Miami for multi-family buildings and gated communities.</p>
          </div>
          <div className="p-8 bg-white shadow-sm rounded-3xl border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
            <h3 className="text-xl font-bold text-[#0B2447] mb-4 group-hover:text-blue-600 transition-colors">Cloud Management</h3>
            <p className="text-gray-600 text-sm">Manage permissions and view access logs from anywhere via a secure cloud dashboard.</p>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <div>
            <h2 className="text-3xl font-bold text-[#0B2447] mb-8">Managed Access for Any Scale</h2>
            <p className="text-gray-600 mb-8 leading-relaxed">From single-door retail shops to multi-site corporate campuses, our access control solutions scale with your needs. We provide the hardware and software to keep your premises secure.</p>
            <div className="space-y-4">
              {[
                'Biometric Fingerprint Readers',
                'Mobile Smartphone Credentials',
                'License Plate Recognition',
                'Time and Attendance Tracking'
              ].map((feature) => (
                <div key={feature} className="flex items-center space-x-3 text-[#0B2447] font-semibold">
                  <div className="w-2 h-2 bg-blue-600 rounded-full"></div>
                  <span>{feature}</span>
                </div>
              ))}
            </div>
          </div>
          <div className="relative">
            <img 
              src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&q=80&w=800" 
              alt="Access Control Hardware" 
              className="rounded-3xl shadow-2xl"
              referrerPolicy="no-referrer"
            />
            <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-blue-600/20 rounded-full blur-2xl animate-pulse"></div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="bg-white p-8 md:p-12 rounded-[2rem] shadow-sm border border-gray-100">
          <div className="text-center max-w-2xl mx-auto mb-12">
            <h2 className="text-3xl font-bold text-[#0B2447] mb-4">Why Access Control Matters</h2>
            <p className="text-gray-600">Traditional keys are a liability. Modern access control provides security, auditability, and convenience.</p>
          </div>
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            {[
              { title: 'Audit Trails', desc: 'Know exactly who entered and when.' },
              { title: 'Instant Revoke', desc: 'Disable access immediately if a fob is lost.' },
              { title: 'Schedule Based', desc: 'Set specific hours for employee access.' },
              { title: 'Remote Unlock', desc: 'Open doors for deliveries from your phone.' }
            ].map((item) => (
              <div key={item.title} className="text-center">
                <h4 className="font-bold text-[#0B2447] mb-2">{item.title}</h4>
                <p className="text-xs text-gray-500">{item.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  </div>
);

const FireSystemsPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-12 md:py-24 relative overflow-hidden">
      <div className="absolute inset-0 opacity-30">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/fire-alarm-systems-miami-commercial-installation-scaled.jpg" 
          alt="Fire Systems" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="max-w-3xl">
          <h1 className="text-3xl md:text-6xl font-bold mb-6 leading-tight">Commercial Fire Alarm Installation Miami</h1>
          <p className="text-base md:text-xl text-gray-300 mb-8">
            Life safety systems that meet all Miami-Dade fire codes. Professional design, installation, and monitoring.
          </p>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-red-600 hover:bg-red-700 text-white font-bold px-8 py-4 rounded-full transition shadow-lg"
          >
            Request a Fire Inspection
          </button>
        </div>
      </div>
    </section>

    <section className="py-16 md:py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="max-w-4xl mx-auto text-center">
          <h2 className="text-2xl md:text-3xl font-bold text-[#0B2447] mb-6 md:mb-8">Compliance & Safety First</h2>
          <p className="text-base md:text-lg text-gray-600 mb-8 md:mb-12">
            We provide end-to-end fire safety solutions, from initial plans and permitting to final inspection and ongoing 24/7 monitoring.
          </p>
          <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 text-left">
            <div className="flex items-center space-x-3 p-4 bg-white shadow-sm rounded-xl border border-transparent hover:border-red-500/30 hover:shadow-lg transition-all duration-300 group">
              <Check className="text-green-500 group-hover:scale-110 transition-transform" />
              <span className="font-semibold text-[#0B2447]">NFPA 72 Compliant</span>
            </div>
            <div className="flex items-center space-x-3 p-4 bg-white shadow-sm rounded-xl border border-transparent hover:border-red-500/30 hover:shadow-lg transition-all duration-300 group">
              <Check className="text-green-500 group-hover:scale-110 transition-transform" />
              <span className="font-semibold text-[#0B2447]">UL Listed Monitoring</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 className="text-3xl font-bold text-[#0B2447] mb-6">Professional Fire Alarm Monitoring</h2>
            <p className="text-gray-600 mb-8 leading-relaxed">Our UL-listed central station monitoring ensures that emergency services are dispatched immediately when an alarm is triggered, 24 hours a day, 365 days a year.</p>
            <div className="space-y-4">
              {[
                'Cellular & IP Monitoring Paths',
                'Daily Auto-Test Signals',
                'Instant Notification via Mobile App',
                'Professional Dispatch Services'
              ].map((item) => (
                <div key={item} className="flex items-center space-x-3">
                  <Shield className="text-red-600" size={20} />
                  <span className="text-gray-700 font-medium">{item}</span>
                </div>
              ))}
            </div>
          </div>
          <div className="bg-red-50 p-8 rounded-[3rem] border border-red-100">
            <h3 className="text-2xl font-bold text-red-600 mb-6">Annual Inspections</h3>
            <p className="text-gray-700 mb-6">Stay compliant with local Miami-Dade fire codes. We provide comprehensive annual testing and certification for all fire alarm systems.</p>
            <ul className="space-y-3 text-sm text-gray-600">
              <li>• Smoke Detector Sensitivity Testing</li>
              <li>• Horn/Strobe Functional Testing</li>
              <li>• Battery Load Testing</li>
              <li>• Control Panel Diagnostics</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8 text-center">
        <h2 className="text-3xl font-bold text-[#0B2447] mb-12">Our Fire Safety Partners</h2>
        <div className="flex flex-wrap justify-center gap-12 opacity-40">
          {['Honeywell', 'Fire-Lite', 'Silent Knight', 'Notifier'].map((brand) => (
            <span key={brand} className="text-2xl font-bold italic">{brand}</span>
          ))}
        </div>
      </div>
    </section>
  </div>
);

const NetworkingPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-12 md:py-24 relative overflow-hidden">
      <div className="absolute inset-0 opacity-30">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/networking-services-miami-structured-cabling-scaled.jpg" 
          alt="Networking" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="max-w-3xl">
          <h1 className="text-3xl md:text-6xl font-bold mb-6 leading-tight">Networking & Structured Cabling Miami</h1>
          <p className="text-base md:text-xl text-gray-300 mb-8">
            Reliable networking services in Miami. High-speed Wi-Fi, structured cabling, and secure network infrastructure.
          </p>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-full transition shadow-lg"
          >
            Optimize Your Network
          </button>
        </div>
      </div>
    </section>

    <section className="py-12 md:py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16 items-center">
          <div>
            <h2 className="text-2xl md:text-3xl font-bold text-[#0B2447] mb-6">The Backbone of Your Smart Property</h2>
            <p className="text-sm md:text-base text-gray-600 mb-6">
              A great security or automation system is only as good as the network it runs on. We provide expert structured cabling and robust Wi-Fi solutions.
            </p>
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
              <div className="p-3 md:p-4 bg-white shadow-sm rounded-xl font-bold text-[#0B2447] text-sm md:text-base border border-transparent hover:border-blue-500/30 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">Enterprise Wi-Fi</div>
              <div className="p-3 md:p-4 bg-white shadow-sm rounded-xl font-bold text-[#0B2447] text-sm md:text-base border border-transparent hover:border-blue-500/30 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">Cat6 Cabling</div>
              <div className="p-3 md:p-4 bg-white shadow-sm rounded-xl font-bold text-[#0B2447] text-sm md:text-base border border-transparent hover:border-blue-500/30 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">Fiber Optics</div>
              <div className="p-3 md:p-4 bg-white shadow-sm rounded-xl font-bold text-[#0B2447] text-sm md:text-base border border-transparent hover:border-blue-500/30 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">Rack Management</div>
            </div>
          </div>
          <img 
            src="https://securityonthespot.com/wp-content/uploads/2025/08/network-cables.jpg" 
            alt="Network Cables" 
            className="rounded-3xl shadow-xl w-full object-cover h-64 md:h-auto mt-8 lg:mt-0 border-4 border-white"
            referrerPolicy="no-referrer"
          />
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div className="order-2 md:order-1">
            <img 
              src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&q=80&w=800" 
              alt="Fiber Optics" 
              className="rounded-3xl shadow-2xl"
              referrerPolicy="no-referrer"
            />
          </div>
          <div className="order-1 md:order-2">
            <h2 className="text-3xl font-bold text-[#0B2447] mb-6">Fiber Optic Solutions</h2>
            <p className="text-gray-600 mb-8 leading-relaxed">For large properties or high-bandwidth requirements, fiber optics provide the ultimate in speed and reliability. We offer professional fiber splicing and termination services.</p>
            <div className="grid grid-cols-2 gap-4">
              <div className="p-4 bg-blue-50 rounded-2xl">
                <div className="text-blue-600 font-bold mb-1">10Gbps+</div>
                <div className="text-xs text-gray-500">Speed Potential</div>
              </div>
              <div className="p-4 bg-blue-50 rounded-2xl">
                <div className="text-blue-600 font-bold mb-1">Immune</div>
                <div className="text-xs text-gray-500">to Interference</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="text-center max-w-2xl mx-auto mb-16">
          <h2 className="text-3xl font-bold text-[#0B2447] mb-4">Network Security</h2>
          <p className="text-gray-600">A fast network is useless if it's not secure. We implement enterprise-grade security protocols to protect your data.</p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {[
            { title: 'Firewall Setup', desc: 'Robust perimeter defense for your network.' },
            { title: 'VLAN Segregation', desc: 'Isolate guest Wi-Fi from secure business data.' },
            { title: 'VPN Solutions', desc: 'Secure remote access for your employees.' }
          ].map((item) => (
            <div key={item.title} className="bg-white p-8 rounded-2xl shadow-sm border border-transparent hover:border-blue-500/30 transition-all group">
              <h4 className="font-bold text-[#0B2447] mb-3 group-hover:text-blue-600">{item.title}</h4>
              <p className="text-sm text-gray-500">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  </div>
);

const AudioVideoPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <div className="animate-in fade-in duration-500">
    <section className="bg-[#0B2447] text-white py-12 md:py-24 relative overflow-hidden">
      <div className="absolute inset-0 opacity-30">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/home-theater-installation-miami-surround-sound-setup-scaled.jpg" 
          alt="Audio Video" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="max-w-3xl">
          <h1 className="text-3xl md:text-6xl font-bold mb-6 leading-tight">Audio & Video Integration Miami</h1>
          <p className="text-base md:text-xl text-gray-300 mb-8">
            Professional home theater installation in Miami and video walls in South Florida. Immersive entertainment experiences.
          </p>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-full transition shadow-lg"
          >
            Design Your Space
          </button>
        </div>
      </div>
    </section>

    <section className="py-16 md:py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
          <div className="p-8 md:p-10 bg-white shadow-sm rounded-3xl border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B2447] mb-4 group-hover:text-blue-600 transition-colors">Home Theater</h3>
            <p className="text-gray-600 text-sm md:text-base">Custom surround sound, 4K projectors, and acoustic treatments for the ultimate cinematic experience at home.</p>
          </div>
          <div className="p-8 md:p-10 bg-white shadow-sm rounded-3xl border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B2447] mb-4 group-hover:text-blue-600 transition-colors">Commercial Video Walls</h3>
            <p className="text-gray-600 text-sm md:text-base">High-impact video wall installation for sports bars, lobbies, and command centers across South Florida.</p>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 className="text-3xl font-bold text-[#0B2447] mb-6">Custom Audio Solutions</h2>
            <p className="text-gray-600 mb-8 leading-relaxed">We design and install multi-room audio systems that allow you to enjoy your favorite music in every corner of your home or business, all controlled from your smartphone.</p>
            <div className="space-y-4">
              {[
                'In-Ceiling & In-Wall Speakers',
                'Outdoor Audio Systems',
                'Wireless Multi-Room Integration',
                'High-Fidelity Audio Components'
              ].map((item) => (
                <div key={item} className="flex items-center space-x-3">
                  <Monitor className="text-blue-600" size={20} />
                  <span className="text-gray-700 font-medium">{item}</span>
                </div>
              ))}
            </div>
          </div>
          <div className="relative">
            <img 
              src="https://images.unsplash.com/photo-1545016803-a63d00071e11?auto=format&fit=crop&q=80&w=800" 
              alt="Audio System" 
              className="rounded-3xl shadow-2xl"
              referrerPolicy="no-referrer"
            />
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8 text-center">
        <h2 className="text-3xl font-bold text-[#0B2447] mb-12">Premium Audio Partners</h2>
        <div className="flex flex-wrap justify-center gap-12 opacity-40">
          {['Sonos', 'Bose', 'Klipsch', 'Denon', 'Marantz'].map((brand) => (
            <span key={brand} className="text-2xl font-bold italic">{brand}</span>
          ))}
        </div>
      </div>
    </section>
  </div>
);

const VideoWallPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => (
  <div className="animate-in fade-in duration-500">
    <section className="relative min-h-[350px] md:h-[600px] flex items-center py-12 md:py-0 overflow-hidden">
      <div className="absolute inset-0 z-0">
        <img 
          src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=1920" 
          alt="Video Wall Installation Miami" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
        <div className="absolute inset-0 bg-[#0B2447]/85"></div>
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10 text-white">
        <div className="max-w-3xl">
          <h1 className="text-3xl md:text-6xl font-bold mb-4 md:mb-6 leading-tight">Professional Video Wall Installation Miami</h1>
          <p className="text-base md:text-xl text-gray-300 mb-8">
            Transform your space with high-impact, seamless video wall solutions for commercial and residential settings.
          </p>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-full transition shadow-lg"
          >
            Get a Custom Quote
          </button>
        </div>
      </div>
    </section>

    <section className="py-16 md:py-24 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 items-center">
          <div>
            <h2 className="text-2xl md:text-4xl font-bold text-[#0B2447] mb-8">Cutting-Edge Visual Solutions</h2>
            <p className="text-base md:text-lg text-gray-600 mb-6 leading-relaxed">
              Video walls are the ultimate way to deliver high-impact visual content. Whether you're looking to create a stunning <strong>home theater video wall</strong> or a professional <strong>commercial display system</strong>, Security on the Spot is your expert partner in South Florida.
            </p>
            <div className="space-y-6">
              <div className="bg-white p-6 rounded-2xl shadow-sm border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
                <h3 className="font-bold text-[#0B2447] mb-2 flex items-center group-hover:text-blue-600 transition-colors">
                  <Monitor className="mr-2 text-blue-600" size={20} /> Commercial Applications
                </h3>
                <p className="text-sm text-gray-500">Perfect for sports bars, corporate lobbies, command centers, and retail showrooms. Engage your audience with massive, crystal-clear displays.</p>
              </div>
              <div className="bg-white p-6 rounded-2xl shadow-sm border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group hover:-translate-y-1">
                <h3 className="font-bold text-[#0B2447] mb-2 flex items-center group-hover:text-blue-600 transition-colors">
                  <Home className="mr-2 text-blue-600" size={20} /> Residential Luxury
                </h3>
                <p className="text-sm text-gray-500">Elevate your home entertainment with a custom video wall. Ideal for dedicated media rooms and high-end living spaces.</p>
              </div>
            </div>
          </div>
          <div className="relative">
            <img 
              src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&q=80&w=1000" 
              alt="Video Wall Display" 
              className="rounded-3xl shadow-2xl w-full object-cover h-80 md:h-auto border-4 border-white"
              referrerPolicy="no-referrer"
            />
            <div className="absolute -bottom-6 -right-6 bg-blue-600 text-white p-8 rounded-2xl shadow-xl hidden md:block">
              <div className="text-3xl font-bold">4K/8K</div>
              <div className="text-xs uppercase font-bold opacity-80">Resolution Ready</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-16 md:py-24 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] text-center mb-16">Why Choose Professional Installation?</h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
          {[
            { title: 'Seamless Integration', desc: 'We ensure pixel-perfect alignment and color calibration across all displays for a truly unified look.', icon: <Zap /> },
            { title: 'Robust Mounting', desc: 'Our team uses professional-grade hardware to safely secure heavy displays on any wall surface.', icon: <Shield /> },
            { title: 'Expert Calibration', desc: 'We optimize brightness, contrast, and color settings to ensure your video wall looks stunning in any lighting.', icon: <Monitor /> }
          ].map((benefit) => (
            <div key={benefit.title} className="text-center p-8 bg-slate-50 rounded-3xl border border-gray-100">
              <div className="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6">
                {benefit.icon}
              </div>
              <h3 className="text-xl font-bold text-[#0B2447] mb-4">{benefit.title}</h3>
              <p className="text-gray-600 text-sm leading-relaxed">{benefit.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <div>
            <h2 className="text-3xl font-bold text-[#0B2447] mb-6">Custom Configuration Options</h2>
            <p className="text-gray-600 mb-8 leading-relaxed">Every space is unique. We offer a variety of configurations to meet your specific visual goals and architectural requirements.</p>
            <div className="grid grid-cols-2 gap-6">
              {[
                { label: '2x2 Matrix', value: 'Standard' },
                { label: '3x3 Matrix', value: 'High Impact' },
                { label: 'Custom Aspect', value: 'Artistic' },
                { label: 'Curved Walls', value: 'Immersive' }
              ].map((opt) => (
                <div key={opt.label} className="p-4 bg-white rounded-2xl shadow-sm border border-blue-100">
                  <div className="text-blue-600 font-bold">{opt.value}</div>
                  <div className="text-xs text-gray-500">{opt.label}</div>
                </div>
              ))}
            </div>
          </div>
          <div className="relative">
            <img 
              src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800" 
              alt="Video Wall Design" 
              className="rounded-3xl shadow-2xl"
              referrerPolicy="no-referrer"
            />
          </div>
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
      case 'home-automation-smart-homes-in-miami': return <HomeAutomationPage setActivePage={setActivePage} />;
      case 'contact-us': return <ContactPage />;
      case 'who-we-are': return <WhoWeArePage />;
      case 'access-control': return <AccessControlPage setActivePage={setActivePage} />;
      case 'fire-systems': return <FireSystemsPage setActivePage={setActivePage} />;
      case 'networking-fiber-optics': return <NetworkingPage setActivePage={setActivePage} />;
      case 'audio-video-services': return <AudioVideoPage setActivePage={setActivePage} />;
      case 'video-wall-installation': return <VideoWallPage setActivePage={setActivePage} />;
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

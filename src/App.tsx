import React, { useState, useEffect } from 'react';
import { Shield, Camera, Home, Lock, Flame, Network, Phone, Mail, MapPin, Menu, X, ChevronRight, Star, Clock, Zap, Monitor, Music, Smartphone, Check, ChevronUp, ChevronDown, Facebook, Instagram, MessageSquare, Linkedin, CheckCircle2 } from 'lucide-react';
import { motion, AnimatePresence } from 'motion/react';
import { generateHeroVideo } from './services/videoService';
import { pages } from './services/pages';

// --- Components ---

const Header = ({ activePage, setActivePage }: { activePage: string, setActivePage: (page: string) => void }) => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [activeDropdown, setActiveDropdown] = useState<string | null>(null);

  const navItems = [
    {
      name: 'Security Cameras',
      slug: 'security-cameras-security-on-the-spot',
      submenu: [
        { name: 'Commercial & Warehouse Properties', slug: 'commercial-warehouse' },
        { name: 'Restaurants', slug: 'restaurants' },
        { name: 'Small Businesses', slug: 'small-businesses' },
        { name: 'Retail', slug: 'retail' },
        { name: 'Families', slug: 'families' },
        { name: 'Car Workshops', slug: 'car-workshops' },
      ]
    },
    {
      name: 'Home Automation',
      slug: 'home-automation-smart-homes-in-miami',
      submenu: [
        { name: 'Control Integration', slug: 'control-integration' },
        { name: 'Lighting Control', slug: 'lighting-control' },
        { name: 'Multi-Zone Audio', slug: 'multi-zone-audio' },
        { name: 'Home Theater', slug: 'home-theater' },
        { name: 'Video-Wall Installation', slug: 'video-wall-installation' },
      ]
    },
    {
      name: 'Access Control',
      slug: 'access-control',
      submenu: [
        { name: 'Intercom Systems', slug: 'intercom-systems' },
        { name: 'Entry/Exit Systems', slug: 'entry-exit-systems' },
      ]
    },
    { name: 'Networking & Fiber Optics', slug: 'networking-fiber-optics' },
    { name: 'Fire Systems', slug: 'fire-systems' },
    {
      name: 'Who we are?',
      slug: 'who-we-are',
      submenu: [
        { name: 'Contact Us', slug: 'contact-us' },
      ]
    }
  ];

  return (
    <header className="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
      <div className="bg-[#0B2447] py-2 px-4 text-center text-[10px] md:text-xs text-white font-bold border-b border-blue-900">
        PREVIEW UPDATED (v1.0.14): New Menu Structure & Submenus.
      </div>
      <nav className="container mx-auto px-4 md:px-8 py-3 md:py-4 flex items-center justify-between">
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
            <div 
              key={item.slug} 
              className="relative group"
              onMouseEnter={() => setActiveDropdown(item.slug)}
              onMouseLeave={() => setActiveDropdown(null)}
            >
              <button
                onClick={() => setActivePage(item.slug)}
                className={`flex items-center space-x-1 hover:text-blue-600 transition py-4 ${activePage === item.slug ? 'text-blue-600' : ''}`}
              >
                <span>{item.name}</span>
                {item.submenu && <ChevronDown size={14} className={`transition-transform duration-200 ${activeDropdown === item.slug ? 'rotate-180' : ''}`} />}
              </button>

              {item.submenu && (
                <AnimatePresence>
                  {activeDropdown === item.slug && (
                    <motion.div
                      initial={{ opacity: 0, y: 10 }}
                      animate={{ opacity: 1, y: 0 }}
                      exit={{ opacity: 0, y: 10 }}
                      className="absolute top-full left-0 w-64 bg-white shadow-xl border border-gray-100 rounded-xl py-2 z-50"
                    >
                      {item.submenu.map((sub) => (
                        <button
                          key={sub.slug}
                          onClick={() => {
                            setActivePage(sub.slug);
                            setActiveDropdown(null);
                          }}
                          className="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"
                        >
                          {sub.name}
                        </button>
                      ))}
                    </motion.div>
                  )}
                </AnimatePresence>
              )}
            </div>
          ))}
        </div>

        <div className="flex items-center space-x-2 md:space-x-4">
          <a className="hidden lg:block text-[#0B2447] font-bold text-sm" href="tel:7868227868">
            (786) 822-7868
          </a>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-[#0B2447] hover:bg-blue-600 text-white px-4 md:px-6 py-2.5 rounded-full text-[11px] md:text-sm font-bold transition whitespace-nowrap shadow-md active:scale-95"
          >
            Free Quote
          </button>
          
          {/* Mobile Menu Toggle */}
          <button 
            className="lg:hidden text-[#0B2447] p-2 bg-gray-50 rounded-xl flex-shrink-0 ml-1 hover:bg-blue-50 transition-colors border border-gray-100" 
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            aria-label="Toggle Menu"
          >
            {isMenuOpen ? <X size={22} /> : <Menu size={22} />}
          </button>
        </div>
      </nav>

      {/* Mobile Menu Overlay */}
      <AnimatePresence>
        {isMenuOpen && (
          <div className="fixed inset-0 z-50 lg:hidden">
            {/* Backdrop */}
            <motion.div 
              initial={{ opacity: 0 }}
              animate={{ opacity: 1 }}
              exit={{ opacity: 0 }}
              onClick={() => setIsMenuOpen(false)}
              className="absolute inset-0 bg-[#0B2447]/40 backdrop-blur-sm"
            />
            
            {/* Menu Content */}
            <motion.div 
              initial={{ x: '100%' }}
              animate={{ x: 0 }}
              exit={{ x: '100%' }}
              transition={{ type: 'spring', damping: 25, stiffness: 200 }}
              className="absolute right-0 top-0 bottom-0 w-4/5 max-w-sm bg-white shadow-2xl p-8 overflow-y-auto"
            >
              <div className="flex justify-end mb-8">
                <button 
                  onClick={() => setIsMenuOpen(false)}
                  className="p-2 bg-gray-50 rounded-xl text-[#0B2447] hover:bg-blue-50 transition-colors"
                >
                  <X size={24} />
                </button>
              </div>
              
              <div className="flex flex-col space-y-4">
                {navItems.map((item) => (
                  <div key={item.slug} className="flex flex-col">
                    <div className="flex items-center justify-between py-2">
                      <button
                        onClick={() => {
                          setActivePage(item.slug);
                          setIsMenuOpen(false);
                        }}
                        className={`text-lg font-bold transition flex-1 text-left ${activePage === item.slug ? 'text-blue-600' : 'text-[#0B2447] hover:text-blue-600'}`}
                      >
                        {item.name}
                      </button>
                      {item.submenu && (
                        <button 
                          onClick={() => setActiveDropdown(activeDropdown === item.slug ? null : item.slug)}
                          className="p-2 text-[#0B2447]"
                        >
                          <ChevronDown size={20} className={`transition-transform duration-200 ${activeDropdown === item.slug ? 'rotate-180' : ''}`} />
                        </button>
                      )}
                    </div>
                    
                    {item.submenu && activeDropdown === item.slug && (
                      <motion.div 
                        initial={{ height: 0, opacity: 0 }}
                        animate={{ height: 'auto', opacity: 1 }}
                        className="flex flex-col pl-4 space-y-2 mt-2 border-l-2 border-blue-100"
                      >
                        {item.submenu.map((sub) => (
                          <button
                            key={sub.slug}
                            onClick={() => {
                              setActivePage(sub.slug);
                              setIsMenuOpen(false);
                            }}
                            className="text-left py-2 text-gray-600 hover:text-blue-600 transition text-sm font-medium"
                          >
                            {sub.name}
                          </button>
                        ))}
                      </motion.div>
                    )}
                  </div>
                ))}
                
                <div className="pt-8 border-t border-gray-100">
                  <a href="tel:7868227868" className="flex items-center space-x-3 text-[#0B2447] font-bold mb-6">
                    <Phone className="w-6 h-6 text-blue-600" />
                    <span>(786) 822-7868</span>
                  </a>
                  <button 
                    onClick={() => {
                      setActivePage('contact-us');
                      setIsMenuOpen(false);
                    }}
                    className="w-full bg-[#0B2447] text-white text-center py-4 rounded-2xl font-bold shadow-lg active:scale-95 transition-transform"
                  >
                    Get a Free Quote
                  </button>
                </div>
              </div>
            </motion.div>
          </div>
        )}
      </AnimatePresence>
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
            <div className="flex space-x-4">
              <a href="https://facebook.com/salesonthespot" target="_blank" className="text-gray-400 hover:text-white transition"><Facebook size={20} /></a>
              <a href="https://instagram.com/securityonthespotfl/" target="_blank" className="text-gray-400 hover:text-white transition"><Instagram size={20} /></a>
              <a href="https://www.linkedin.com/company/securityonthespot" target="_blank" className="text-gray-400 hover:text-white transition"><Linkedin size={20} /></a>
            </div>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6">Navigation</h4>
            <ul className="space-y-4 text-gray-400 text-sm">
              <li><button onClick={() => setActivePage('home')} className="hover:text-white transition">Home</button></li>
              <li><button onClick={() => setActivePage('who-we-are')} className="hover:text-white transition">About Us</button></li>
              <li><button onClick={() => setActivePage('contact-us')} className="hover:text-white transition">Contact Us</button></li>
            </ul>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6">Quick Links</h4>
            <ul className="space-y-4 text-gray-400 text-sm">
              <li><button onClick={() => setActivePage('security-cameras-security-on-the-spot')} className="hover:text-white transition">Security Cameras</button></li>
              <li><button onClick={() => setActivePage('home-automation-smart-homes-in-miami')} className="hover:text-white transition">Home Automation</button></li>
              <li><button onClick={() => setActivePage('access-control')} className="hover:text-white transition">Access Control</button></li>
              <li><button onClick={() => setActivePage('networking-fiber-optics')} className="hover:text-white transition">Networking</button></li>
              <li><button onClick={() => setActivePage('fire-systems')} className="hover:text-white transition">Fire Systems</button></li>
            </ul>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6">Work Hours</h4>
            <ul className="space-y-4 text-gray-400 text-sm">
              <li className="flex items-center space-x-2">
                <Clock className="w-5 h-5 text-blue-500 flex-shrink-0" />
                <span>Mon–Fri: 8:00 AM – 6:00 PM</span>
              </li>
              <li className="flex items-center space-x-2">
                <Phone className="w-5 h-5 text-blue-500 flex-shrink-0" />
                <a className="hover:text-white transition" href="tel:7868227868">(786) 822-7868</a>
              </li>
            </ul>
          </div>
        </div>
        <div className="border-t border-gray-800 pt-8 text-center text-sm text-gray-500">
          <p>© 2025 Security On The Spot • All Rights Reserved</p>
          <p className="mt-2"><a href="https://toctoc.ky/" target="_blank" className="text-white hover:underline">Crafted with care by Toc Toc Marketing</a></p>
        </div>
      </div>
    </footer>
  );
};

// --- Page Components ---

const HomePage = ({ setActivePage }: { setActivePage: (page: string) => void }) => {
  const heroVideo = 'https://anti2.workingtoctoc.com/wp/wp-content/uploads/2026/03/Flow_delpmaspu_.mp4';

  return (
    <div className="animate-in fade-in duration-500">
      {/* Hero Section */}
      <section className="relative min-h-[600px] md:h-[800px] flex items-center py-12 md:py-0 overflow-hidden">
        <div className="absolute inset-0 z-0">
          <video 
            autoPlay
            muted
            loop
            playsInline
            className="w-full h-full object-cover"
            src={heroVideo}
          />
          <div className="absolute inset-0 bg-black/40"></div>
        </div>
        
        <div className="container mx-auto px-4 md:px-8 relative z-10">
          <div className="max-w-3xl text-white">
            <motion.div 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6 }}
              className="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-md text-white px-4 py-1.5 rounded-full text-[10px] md:text-xs font-bold mb-6 border border-white/30"
            >
              <Star size={14} className="text-yellow-400 fill-yellow-400" />
              <span>RATED 4.9 HAPPY CUSTOMERS</span>
            </motion.div>
            <motion.p
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.1 }}
              className="text-blue-400 font-bold tracking-wider text-sm md:text-base mb-4"
            >
              24/7 PROTECTION FOR YOUR HOME OR BUSINESS WITH MIAMI’S MOST TRUSTED SECURITY EXPERTS.
            </motion.p>
            <motion.h1 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.2 }}
              className="text-4xl md:text-7xl font-extrabold mb-6 leading-tight"
            >
              Security Camera Installation & CCTV Systems in Miami
            </motion.h1>
            <motion.p 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.4 }}
              className="text-base md:text-xl text-gray-200 mb-8 leading-relaxed"
            >
              Don’t settle for ‘basic’ security. Security On The Spot provides high-definition surveillance, remote mobile access, and professional installation. We are Miami’s #1 Rated Security Camera Installation Team in 2026.
            </motion.p>
            <motion.div 
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.6 }}
            >
              <button 
                onClick={() => setActivePage('contact-us')}
                className="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-8 md:px-10 py-4 md:py-5 rounded-full font-bold text-sm md:text-lg transition shadow-xl active:scale-95"
              >
                Get My Free Security Quote Now – (786) 822-7868
              </button>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Offer Section */}
      <section className="py-16 md:py-24 bg-white">
        <div className="container mx-auto px-4 md:px-8">
          <div className="flex flex-col lg:flex-row items-center gap-12">
            <div className="lg:w-1/2">
              <img 
                src="https://securityonthespot.com/wp-content/uploads/2025/11/home-sots-carrousel-1.png" 
                alt="Home Security Package" 
                className="rounded-3xl shadow-2xl w-full"
                referrerPolicy="no-referrer"
              />
            </div>
            <div className="lg:w-1/2">
              <h2 className="text-3xl md:text-5xl font-bold text-[#0B2447] mb-6">Complete Home Security Package for $1,499</h2>
              <p className="text-gray-600 text-lg mb-8">
                We believe professional security should be transparent. Our Miami Home Security Package includes high-definition cameras, professional installation, and a 3-year total guarantee—all for one flat fee with no monthly contracts.
              </p>
              <ul className="space-y-4 mb-10">
                {[
                  { title: 'Complete Package for $1,499', desc: 'Get your system professionally installed for one flat fee.' },
                  { title: '100% Transparent Pricing', desc: 'No hidden fees. No monthly contracts.' },
                  { title: 'Top-Rated in Miami', desc: '4.9 Stars on Google and Miami’s trusted installer.' },
                  { title: '3-Year Total Guarantee', desc: 'Includes a 2-Year Hardware Warranty + 1-Year Installation Warranty.' },
                  { title: 'View From Anywhere', desc: 'Get 24/7 remote access from your phone or computer.' }
                ].map((item, idx) => (
                  <li key={idx} className="flex items-start space-x-3">
                    <div className="mt-1 bg-blue-100 p-1 rounded-full text-blue-600">
                      <Check size={16} />
                    </div>
                    <div>
                      <span className="font-bold text-[#0B2447]">{item.title}:</span> <span className="text-gray-600">{item.desc}</span>
                    </div>
                  </li>
                ))}
              </ul>
              <button 
                onClick={() => setActivePage('contact-us')}
                className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-bold transition shadow-lg active:scale-95"
              >
                Get This $1,499 Offer Now
              </button>
            </div>
          </div>
        </div>
      </section>

      {/* Services Grid */}
      <section className="py-16 md:py-24 bg-slate-50">
        <div className="container mx-auto px-4 md:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-5xl font-bold text-[#0B2447] mb-6">Miami’s Comprehensive Security & Technology Solutions</h2>
            <p className="text-gray-600 text-lg">We design, install, and maintain state-of-the-art security systems for every type of property.</p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {[
              { title: 'Residential Security', desc: 'Protect your home and family with 24/7 surveillance and remote monitoring.', img: 'https://securityonthespot.com/wp-content/uploads/2025/09/home-hotel-lobby-security-camera-installation-scaled.jpg' },
              { title: 'Small Businesses', desc: 'Affordable security cameras miami solutions tailored for restaurants, shops, and offices.', img: 'https://securityonthespot.com/wp-content/uploads/2025/09/home-secure-modern-office-workspace.webp' },
              { title: 'Commercial & Industrial', desc: 'Advanced CCTV cameras designed to secure warehouses, buildings, and large enterprises.', img: 'https://securityonthespot.com/wp-content/uploads/2025/09/home-securing-modern-office-buildings-at-night-1.webp' },
              { title: 'Restaurants & Hospitality', desc: 'Keep your staff, customers, and operations safe with reliable video surveillance.', img: 'https://securityonthespot.com/wp-content/uploads/2025/09/home-restaurant-security-camera-installation.webp' }
            ].map((service, idx) => (
              <div key={idx} className="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group border border-gray-100">
                <div className="h-48 overflow-hidden">
                  <img src={service.img} alt={service.title} className="w-full h-full object-cover group-hover:scale-110 transition duration-500" referrerPolicy="no-referrer" />
                </div>
                <div className="p-6">
                  <h3 className="text-xl font-bold text-[#0B2447] mb-3">{service.title}</h3>
                  <p className="text-gray-500 text-sm leading-relaxed">{service.desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* About Section */}
      <section className="py-16 md:py-24 bg-white">
        <div className="container mx-auto px-4 md:px-8">
          <div className="flex flex-col lg:flex-row items-center gap-12">
            <div className="lg:w-1/2">
              <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-orlando-security-camera-team.webp" alt="Security Team" className="rounded-3xl shadow-2xl" referrerPolicy="no-referrer" />
            </div>
            <div className="lg:w-1/2">
              <h2 className="text-3xl md:text-5xl font-bold text-[#0B2447] mb-6">About Security on the Spot</h2>
              <p className="text-gray-600 text-lg mb-6 leading-relaxed">
                At Security on the Spot, we are a family-owned company with over 20 years of experience in the security industry. Founded in Miami, our mission is simple: to protect what matters most—your home, your business, and your peace of mind.
              </p>
              <p className="text-gray-600 text-lg mb-8 leading-relaxed">
                We believe in honest, reliable, and professional service, backed by cutting-edge technology and the trust of hundreds of satisfied clients across Miami-Dade.
              </p>
              <button 
                onClick={() => setActivePage('contact-us')}
                className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-bold transition shadow-lg active:scale-95"
              >
                Get My Free Security Quote Now – (786) 822-7868
              </button>
            </div>
          </div>
        </div>
      </section>

      {/* Brands Carousel */}
      <section className="py-12 bg-slate-50 border-y border-gray-100">
        <div className="container mx-auto px-4">
          <h3 className="text-center text-gray-400 font-bold uppercase tracking-widest text-xs mb-10">Trusted by Leading Brands in Miami</h3>
          <div className="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition duration-500">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/sonos-company-logo.webp" alt="Sonos" className="h-6 md:h-8" referrerPolicy="no-referrer" />
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/ubiquiti-logo-corrupted-file-graphic.webp" alt="Ubiquiti" className="h-6 md:h-8" referrerPolicy="no-referrer" />
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/uniview-logo-red-banner-variant.webp" alt="Uniview" className="h-6 md:h-8" referrerPolicy="no-referrer" />
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/alhua-logo-red-and-black-silhouette.webp" alt="Alhua" className="h-6 md:h-8" referrerPolicy="no-referrer" />
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/control4-logo-gray-and-red-gradient.webp" alt="Control4" className="h-6 md:h-8" referrerPolicy="no-referrer" />
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/icr-real-time-blob-detection.webp" alt="ICR" className="h-6 md:h-8" referrerPolicy="no-referrer" />
          </div>
        </div>
      </section>

      {/* Why Choose Us */}
      <section className="py-16 md:py-24 bg-white">
        <div className="container mx-auto px-4 md:px-8">
          <div className="flex flex-col lg:flex-row items-center gap-12">
            <div className="lg:w-1/2 order-2 lg:order-1">
              <h2 className="text-3xl md:text-5xl font-bold text-[#0B2447] mb-8">Miami's #1 Security Camera Installation Service</h2>
              <div className="space-y-6">
                {[
                  '20+ years of experience in security systems',
                  'Fast, clean, and professional installations',
                  'Remote access from your phone or computer',
                  'Custom solutions for homes, restaurants, offices, and warehouses',
                  'Trusted by top Miami businesses and families'
                ].map((item, idx) => (
                  <div key={idx} className="flex items-center space-x-4 p-4 bg-slate-50 rounded-2xl border border-gray-100">
                    <div className="bg-blue-600 text-white p-2 rounded-lg">
                      <Check size={20} />
                    </div>
                    <span className="font-bold text-[#0B2447]">{item}</span>
                  </div>
                ))}
              </div>
            </div>
            <div className="lg:w-1/2 order-1 lg:order-2">
              <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-security-camera-installation-kit.webp" alt="Security Kit" className="rounded-3xl shadow-2xl" referrerPolicy="no-referrer" />
            </div>
          </div>
        </div>
      </section>

      {/* Solutions Section */}
      <section className="py-16 md:py-24 bg-slate-50">
        <div className="container mx-auto px-4 md:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-5xl font-bold text-[#0B2447] mb-6">Comprehensive Security & Technology Solutions</h2>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {[
              { title: 'Security Camera Installation', desc: 'High-definition CCTV systems for warehouses, restaurants, and luxury estates. Monitor your property from anywhere in the world.', icon: <Camera />, slug: 'security-cameras-security-on-the-spot' },
              { title: 'Smart Home Automation', desc: 'Control your lights, locks, and temperature with a single app. We create intelligent living spaces in Miami.', icon: <Home />, slug: 'home-automation-smart-homes-in-miami' },
              { title: 'Access Control & Intercoms', desc: 'Manage entry points with keyless systems, video intercoms, and magnetic locks for businesses and HOAs.', icon: <Lock />, slug: 'access-control' },
              { title: 'Fiber Optics & Networking', desc: 'The backbone of your security. We install high-speed structured cabling and robust Wi-Fi networks.', icon: <Network />, slug: 'networking-fiber-optics' },
              { title: 'Fire Alarm & Detection Systems', desc: 'Protect what matters most. We design and install commercial-grade fire alarm and detection systems.', icon: <Flame />, slug: 'fire-systems' }
            ].map((item, idx) => (
              <div key={idx} className="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">
                <div className="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-6">
                  {item.icon}
                </div>
                <h3 className="text-xl font-bold text-[#0B2447] mb-4">{item.title}</h3>
                <p className="text-gray-500 text-sm leading-relaxed mb-6">{item.desc}</p>
                <button onClick={() => setActivePage(item.slug)} className="text-blue-600 font-bold hover:underline">Learn More</button>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* FAQ Section */}
      <section className="py-16 md:py-24 bg-white">
        <div className="container mx-auto px-4 md:px-8">
          <h2 className="text-3xl md:text-5xl font-bold text-[#0B2447] text-center mb-16">Frequently Asked Questions</h2>
          <div className="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            {[
              { q: 'Where is Security on the Spot located?', a: 'Our headquarters are at 4861 NW 72nd Ave, Miami, FL 33166, serving Miami and all of South Florida.' },
              { q: 'What services do you offer?', a: 'We provide security camera installation, smart home automation, access control, fire alarms, and networking solutions.' },
              { q: 'How long have you been in business?', a: 'We have over 22 years of experience in the security industry and more than 10 years operating as a registered company in Miami.' },
              { q: 'Which areas do you serve?', a: 'Serving all of Miami-Dade including Doral, Kendall, Brickell, Coral Gables, and Miami Beach.' },
              { q: 'Do you offer free consultations?', a: 'Yes, we provide a free consultation to assess your security needs and offer a personalized solution.' },
              { q: 'What payment methods do you accept?', a: 'We accept credit cards (Visa, MasterCard, American Express) and cash.' }
            ].map((faq, idx) => (
              <div key={idx} className="p-6 bg-slate-50 rounded-2xl border border-gray-100">
                <h4 className="font-bold text-[#0B2447] mb-3">{faq.q}</h4>
                <p className="text-gray-600 text-sm">{faq.a}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Final CTA */}
      <section className="py-16 md:py-24 bg-[#0B2447] text-center text-white">
        <div className="container mx-auto px-4">
          <h2 className="text-3xl md:text-6xl font-bold mb-6">Ready to Install Your Security Cameras in Miami?</h2>
          <p className="text-gray-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto">Get your free consultation today and discover how Security on the Spot can protect what matters most.</p>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-blue-600 hover:bg-blue-700 text-white px-10 py-5 rounded-full font-bold text-xl md:text-2xl transition shadow-xl active:scale-95"
          >
            Get My Free Security Quote Now – (786) 822-7868
          </button>
        </div>
      </section>
    </div>
  );
};

const SecurityCamerasPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => {
  return (
    <div className="animate-in fade-in duration-500">
    <section className="relative min-h-[400px] md:h-[600px] flex items-center py-12 md:py-0 overflow-hidden">
      <div className="absolute inset-0 z-0">
        <img 
          src="https://securityonthespot.com/wp-content/uploads/2025/09/restaurants-restaurant-outdoor-security-camera-scaled.jpg" 
          alt="Security Camera Installation Miami" 
          className="w-full h-full object-cover"
          referrerPolicy="no-referrer"
        />
        <div className="absolute inset-0 bg-[#0B2447]/85"></div>
      </div>
      <div className="container mx-auto px-4 md:px-8 relative z-10 text-white">
        <h1 className="text-4xl md:text-7xl font-bold mb-4 md:mb-6 leading-tight max-w-4xl">Security Cameras Miami: Professional CCTV Installation</h1>
        <p className="text-lg md:text-2xl text-gray-300 max-w-2xl mb-10">
          Protect your property with high-definition surveillance and 24/7 remote access.
        </p>
        <div className="flex flex-col sm:flex-row gap-4">
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-5 rounded-full font-bold transition shadow-lg inline-block text-lg"
          >
            Get Your Free Consultation Today
          </button>
          <a href="tel:7868227868" className="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white px-8 py-5 rounded-full font-bold transition border border-white/20 inline-flex items-center justify-center text-lg">
            <Phone className="mr-2 h-5 w-5" /> (786) 822-7868
          </a>
        </div>
      </div>
    </section>

    <section className="py-16 md:py-24 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 items-center">
          <div>
            <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-8">Advanced CCTV Installation in Miami for Homes & Businesses</h2>
            <p className="text-lg text-gray-600 mb-6 leading-relaxed">
              At <strong>Security on the Spot</strong>, we specialize in <strong>miami cctv cameras</strong> designed to deter crime and provide crystal-clear evidence.
            </p>
            <p className="text-lg text-gray-600 mb-8 leading-relaxed">
              From high-traffic restaurants in <strong>Wynwood</strong> to warehouses in <strong>Doral</strong>, our <strong>security cameras miami</strong> systems give you total control from your phone.
            </p>
            <div className="bg-blue-50 p-6 rounded-2xl border border-blue-100 mb-8">
              <p className="text-[#0B2447] font-bold text-xl flex items-center">
                <Phone className="mr-3 text-blue-600" /> Get Your Free Consultation Today – (786) 822-7868
              </p>
            </div>
          </div>
          <div className="relative">
            <div className="absolute -inset-4 bg-blue-600/5 rounded-[40px] blur-2xl"></div>
            <img 
              src="https://securityonthespot.com/wp-content/uploads/2025/08/surveillance-camera-isolated-on-white-background-2021-08-26-18-17-38-utc.png" 
              alt="CCTV Camera Miami" 
              className="relative z-10 mx-auto max-h-[400px] object-contain drop-shadow-2xl"
              referrerPolicy="no-referrer"
            />
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <h2 className="text-3xl md:text-5xl font-bold text-[#0B2447] mb-6">Custom Surveillance Solutions for Every Need</h2>
          <p className="text-gray-600 text-lg">Tailored security systems designed for the specific challenges of your property.</p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {[
            { title: 'Small Businesses', desc: 'Affordable CCTV installation in Miami with remote monitoring to protect your livelihood.' },
            { title: 'Restaurants', desc: 'Monitor kitchens, staff, and customer areas to ensure safety and operational efficiency.' },
            { title: 'Workshops & Automotive Shops', desc: 'Protect valuable tools, equipment, and customer property with 24/7 surveillance.' },
            { title: 'Retail Stores', desc: 'Reduce theft, prevent shoplifting, and keep track of foot traffic patterns.' },
            { title: 'Warehouses', desc: 'Full coverage for large industrial spaces without disrupting your daily operations.' },
            { title: 'Families & Homes', desc: 'Protect your loved ones with high-end cameras integrated into smart home systems.' }
          ].map((item) => (
            <div key={item.title} className="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group">
              <div className="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                <Shield size={24} />
              </div>
              <h3 className="text-xl font-bold text-[#0B2447] mb-4">{item.title}</h3>
              <p className="text-gray-600 leading-relaxed">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>

    <section className="py-24 bg-[#0B2447] text-white relative overflow-hidden">
      <div className="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <div>
            <h2 className="text-3xl md:text-5xl font-bold mb-8">Why Security on the Spot is Miami’s Top Choice</h2>
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
              {[
                'Remote Viewing',
                'HD Resolution',
                'Motion Alerts',
                'Health monitoring',
                'Expert installation',
                'Ongoing maintenance'
              ].map((feature) => (
                <div key={feature} className="flex items-center space-x-3 bg-white/5 p-4 rounded-2xl border border-white/10">
                  <Check className="text-blue-400 h-6 w-6 flex-shrink-0" />
                  <span className="font-medium">{feature}</span>
                </div>
              ))}
            </div>
          </div>
          <div className="bg-white/5 backdrop-blur-lg p-8 md:p-12 rounded-[40px] border border-white/10">
            <h3 className="text-2xl md:text-3xl font-bold mb-6 text-blue-400">Miami Security Experts You Can Trust</h3>
            <p className="text-gray-300 text-lg leading-relaxed mb-8">
              We understand the unique challenges of securing properties in Miami and South Florida. From high-traffic businesses in <strong>Downtown Miami</strong> to luxury homes in <strong>Coral Gables</strong> or warehouses in <strong>Doral</strong>, our systems are designed to deter theft, provide evidence when needed, and give you complete peace of mind.
            </p>
            <button 
              onClick={() => setActivePage('contact-us')}
              className="w-full bg-blue-600 hover:bg-blue-700 text-white py-5 rounded-2xl font-bold text-xl transition shadow-xl flex items-center justify-center"
            >
              Get Your Free Consultation
            </button>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8 text-center">
        <div className="max-w-4xl mx-auto">
          <h2 className="text-3xl md:text-5xl font-bold text-[#0B2447] mb-8">Ready to Install Your Security Cameras in Miami?</h2>
          <p className="text-xl text-gray-600 mb-12">
            Contact <strong>Security on the Spot</strong> today for a free consultation and discover how our CCTV systems can protect your business or home.
          </p>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div className="bg-slate-50 p-8 rounded-3xl border border-slate-100 flex flex-col items-center">
              <div className="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                <Phone size={32} />
              </div>
              <h4 className="text-xl font-bold text-[#0B2447] mb-2">Call Us</h4>
              <a href="tel:7868227868" className="text-2xl font-bold text-blue-600 hover:underline">(786) 822-7868</a>
            </div>
            <div className="bg-slate-50 p-8 rounded-3xl border border-slate-100 flex flex-col items-center">
              <div className="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                <MapPin size={32} />
              </div>
              <h4 className="text-xl font-bold text-[#0B2447] mb-2">Service Area</h4>
              <p className="text-gray-600 text-lg">Miami, Doral, Kendall, Coral Gables & all South Florida</p>
            </div>
          </div>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-[#0B2447] hover:bg-slate-800 text-white px-12 py-5 rounded-full font-bold text-xl transition shadow-2xl inline-block"
          >
            Get Your Free Consultation Today
          </button>
        </div>
      </div>
    </section>
    </div>
  );
};

const HomeAutomationPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => {
  return (
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
            <div key={item.title} className="bg-white p-8 rounded-2xl shadow-sm border border-transparent hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/10 transition-all duration-300 group hover:-translate-y-1">
              <div className="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                <Zap size={24} />
              </div>
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
            <div className="grid grid-cols-2 gap-4">
              <img src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&q=80&w=400" alt="Smart Home 1" className="rounded-2xl shadow-lg hover:scale-105 transition-transform duration-500" />
              <img src="https://images.unsplash.com/photo-1585232004423-244e0e6904e3?auto=format&fit=crop&q=80&w=400" alt="Smart Home 2" className="rounded-2xl shadow-lg mt-8 hover:scale-105 transition-transform duration-500" />
            </div>
          </div>
          <div className="order-1 lg:order-2">
            <h2 className="text-3xl font-bold text-[#0B2447] mb-6">Automated Climate Control</h2>
            <p className="text-gray-600 mb-8 leading-relaxed">In Miami's heat, smart climate control is a necessity. We integrate high-end thermostats that learn your schedule and optimize cooling for maximum comfort and minimum cost.</p>
            <ul className="space-y-4">
              {['Remote Temperature Adjustment', 'Humidity Monitoring', 'Zoned Cooling Systems', 'Smart Vent Integration'].map((item) => (
                <li key={item} className="flex items-center space-x-3 text-gray-700 p-2 rounded-xl hover:bg-blue-50 transition-colors group cursor-default">
                  <div className="w-5 h-5 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <Check size={12} />
                  </div>
                  <span className="font-medium group-hover:text-blue-600 transition-colors">{item}</span>
                </li>
              ))}
            </ul>
          </div>
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
        <div className="flex flex-wrap justify-center gap-8 md:gap-16">
          {['Control4', 'Lutron', 'Savant', 'Crestron', 'Sonos'].map((brand) => (
            <span key={brand} className="text-2xl md:text-4xl font-black text-[#0B2447] opacity-30 hover:opacity-100 hover:text-blue-600 transition-all duration-300 cursor-default">{brand}</span>
          ))}
        </div>
      </div>
    </section>
  </div>
  );
};

const ContactPage = () => {
  return (
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
              <div className="flex items-start space-x-4 group cursor-pointer">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600 flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                  <Phone size={20} className="md:w-6 md:h-6" />
                </div>
                <div>
                  <h3 className="font-bold text-base md:text-lg text-[#0B2447] group-hover:text-blue-600 transition-colors">Phone</h3>
                  <p className="text-gray-600 text-sm md:text-base">(786) 822-7868</p>
                </div>
              </div>
              <div className="flex items-start space-x-4 group cursor-pointer">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600 flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                  <Mail size={20} className="md:w-6 md:h-6" />
                </div>
                <div>
                  <h3 className="font-bold text-base md:text-lg text-[#0B2447] group-hover:text-blue-600 transition-colors">Email</h3>
                  <p className="text-gray-600 text-sm md:text-base">info@securityonthespot.com</p>
                </div>
              </div>
              <div className="flex items-start space-x-4 group cursor-pointer">
                <div className="bg-slate-50 p-3 rounded-lg text-blue-600 flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                  <MapPin size={20} className="md:w-6 md:h-6" />
                </div>
                <div>
                  <h3 className="font-bold text-base md:text-lg text-[#0B2447] group-hover:text-blue-600 transition-colors">Service Area</h3>
                  <p className="text-gray-600 text-sm md:text-base">Miami, FL and surrounding South Florida areas.</p>
                </div>
              </div>
            </div>
          </div>
          <div className="bg-white p-6 md:p-10 rounded-[2.5rem] shadow-2xl shadow-blue-500/5 border border-gray-100 mt-8 lg:mt-0 relative overflow-hidden">
            <div className="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <h2 className="text-xl md:text-2xl font-bold text-[#0B2447] mb-6 relative z-10">Send us a Message</h2>
            <form className="space-y-4 relative z-10">
              <input type="text" placeholder="Full Name" className="w-full p-4 rounded-xl border border-gray-200 text-sm md:text-base focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all" />
              <input type="email" placeholder="Email Address" className="w-full p-4 rounded-xl border border-gray-200 text-sm md:text-base focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all" />
              <textarea placeholder="Message" rows={4} className="w-full p-4 rounded-xl border border-gray-200 text-sm md:text-base focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all"></textarea>
              <button className="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-700 transition text-sm md:text-base shadow-lg shadow-blue-600/20 active:scale-95">
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  );
};

const WhoWeArePage = () => {
  return (
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
            <p className="text-base md:text-lg text-gray-600 leading-relaxed mb-8">
              With years of experience in the industry, we have built a reputation for excellence, professionalism, and unparalleled customer service.
            </p>
            <div className="grid grid-cols-2 gap-6">
              <div className="p-6 bg-slate-50 rounded-2xl border border-transparent hover:border-blue-500/30 hover:shadow-xl transition-all group">
                <div className="text-3xl font-bold text-blue-600 mb-1">20+</div>
                <div className="text-xs text-gray-500 uppercase font-bold">Years Experience</div>
              </div>
              <div className="p-6 bg-slate-50 rounded-2xl border border-transparent hover:border-blue-500/30 hover:shadow-xl transition-all group">
                <div className="text-3xl font-bold text-blue-600 mb-1">1k+</div>
                <div className="text-xs text-gray-500 uppercase font-bold">Projects Done</div>
              </div>
            </div>
          </div>
          <div className="relative group">
            <img 
              src="https://securityonthespot.com/wp-content/uploads/2025/08/security-on-the-spot-logo-6.webp" 
              alt="Our Team" 
              className="w-full max-w-md mx-auto opacity-80 group-hover:opacity-100 transition-opacity duration-500"
              referrerPolicy="no-referrer"
            />
            <div className="absolute inset-0 bg-blue-600/5 rounded-3xl blur-3xl -z-10"></div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-8">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <h2 className="text-3xl font-bold text-[#0B2447] mb-4">Our Core Values</h2>
          <p className="text-gray-600">The principles that guide everything we do at Security on the Spot.</p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {[
            { title: 'Integrity', desc: 'We are honest, transparent, and ethical in all our interactions.' },
            { title: 'Innovation', desc: 'We stay ahead of the curve with the latest security technologies.' },
            { title: 'Customer First', desc: 'Your safety and satisfaction are our top priorities.' }
          ].map((value) => (
            <div key={value.title} className="bg-white p-10 rounded-[2.5rem] shadow-sm border border-transparent hover:border-blue-500/30 hover:shadow-2xl hover:shadow-blue-500/5 transition-all duration-300 group text-center">
              <div className="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                <Shield size={32} />
              </div>
              <h4 className="text-xl font-bold text-[#0B2447] mb-4">{value.title}</h4>
              <p className="text-gray-600 text-sm leading-relaxed">{value.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  </div>
  );
};

const AccessControlPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => {
  return (
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
                <div key={feature} className="flex items-center space-x-3 text-[#0B2447] font-semibold p-3 rounded-xl hover:bg-blue-50 transition-colors group">
                  <div className="w-2 h-2 bg-blue-600 rounded-full group-hover:scale-150 transition-transform"></div>
                  <span>{feature}</span>
                </div>
              ))}
            </div>
          </div>
          <div className="relative group">
            <img 
              src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&q=80&w=800" 
              alt="Access Control Hardware" 
              className="rounded-3xl shadow-2xl border-4 border-white transition-transform duration-500 group-hover:scale-[1.02]"
              referrerPolicy="no-referrer"
            />
            <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-blue-600/20 rounded-full blur-2xl animate-pulse"></div>
            <div className="absolute inset-0 rounded-3xl bg-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
          </div>
        </div>
      </div>
    </section>

    <section className="py-20 bg-slate-900 text-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div>
            <h2 className="text-3xl font-bold mb-6">Cloud-Based Management</h2>
            <p className="text-gray-400 mb-8">Manage your entire facility's access from a single dashboard. Add or remove users, set schedules, and view entry logs in real-time from any device.</p>
            <div className="grid grid-cols-2 gap-4">
              <div className="p-6 bg-white/5 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-colors">
                <div className="text-2xl font-bold text-blue-400 mb-1">Real-time</div>
                <div className="text-xs text-gray-500 uppercase">Alerts</div>
              </div>
              <div className="p-6 bg-white/5 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-colors">
                <div className="text-2xl font-bold text-blue-400 mb-1">Unlimited</div>
                <div className="text-xs text-gray-500 uppercase">Users</div>
              </div>
            </div>
          </div>
          <div className="bg-blue-600 p-8 md:p-12 rounded-[3rem] shadow-2xl shadow-blue-600/20 relative overflow-hidden group">
            <div className="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-700"></div>
            <h3 className="text-2xl font-bold mb-4">Ready to upgrade your security?</h3>
            <p className="text-blue-100 mb-8">Contact us for a professional assessment of your property's access needs.</p>
            <button 
              onClick={() => setActivePage('contact-us')}
              className="bg-white text-blue-600 font-bold px-8 py-4 rounded-full hover:bg-blue-50 transition shadow-xl"
            >
              Get Started
            </button>
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
};

const FireSystemsPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => {
  return (
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
            <div className="flex items-center space-x-3 p-4 bg-white shadow-sm rounded-xl border border-transparent hover:border-red-500/30 hover:shadow-lg transition-all duration-300 group">
              <Check className="text-green-500 group-hover:scale-110 transition-transform" />
              <span className="font-semibold text-[#0B2447]">Miami-Dade Fire Code Certified</span>
            </div>
            <div className="flex items-center space-x-3 p-4 bg-white shadow-sm rounded-xl border border-transparent hover:border-red-500/30 hover:shadow-lg transition-all duration-300 group">
              <Check className="text-green-500 group-hover:scale-110 transition-transform" />
              <span className="font-semibold text-[#0B2447]">Annual Certification Services</span>
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
                <div key={item} className="flex items-center space-x-3 p-3 rounded-xl hover:bg-red-50 transition-colors group cursor-default">
                  <Shield className="text-red-600 group-hover:scale-110 transition-transform" size={20} />
                  <span className="text-gray-700 font-medium group-hover:text-red-600 transition-colors">{item}</span>
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
        <div className="flex flex-wrap justify-center gap-12">
          {['Honeywell', 'Fire-Lite', 'Silent Knight', 'Notifier'].map((brand) => (
            <span key={brand} className="text-2xl font-bold italic text-[#0B2447] opacity-30 hover:opacity-100 hover:text-red-600 transition-all duration-300 cursor-default">{brand}</span>
          ))}
        </div>
      </div>
    </section>
  </div>
  );
};

const NetworkingPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => {
  return (
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
              <div className="p-3 md:p-4 bg-white shadow-sm rounded-xl font-bold text-[#0B2447] text-sm md:text-base border border-transparent hover:border-blue-500/30 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group">
                <span className="group-hover:text-blue-600 transition-colors">Enterprise Wi-Fi</span>
              </div>
              <div className="p-3 md:p-4 bg-white shadow-sm rounded-xl font-bold text-[#0B2447] text-sm md:text-base border border-transparent hover:border-blue-500/30 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group">
                <span className="group-hover:text-blue-600 transition-colors">Cat6 Cabling</span>
              </div>
              <div className="p-3 md:p-4 bg-white shadow-sm rounded-xl font-bold text-[#0B2447] text-sm md:text-base border border-transparent hover:border-blue-500/30 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group">
                <span className="group-hover:text-blue-600 transition-colors">Fiber Optics</span>
              </div>
              <div className="p-3 md:p-4 bg-white shadow-sm rounded-xl font-bold text-[#0B2447] text-sm md:text-base border border-transparent hover:border-blue-500/30 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group">
                <span className="group-hover:text-blue-600 transition-colors">Rack Management</span>
              </div>
            </div>
          </div>
          <div className="relative group">
            <img 
              src="https://securityonthespot.com/wp-content/uploads/2025/08/network-cables.jpg" 
              alt="Network Cables" 
              className="rounded-3xl shadow-xl w-full object-cover h-64 md:h-auto mt-8 lg:mt-0 border-4 border-white transition-transform duration-500 group-hover:scale-[1.02]"
              referrerPolicy="no-referrer"
            />
            <div className="absolute inset-0 rounded-3xl bg-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
          </div>
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
};

const AudioVideoPage = ({ setActivePage }: { setActivePage: (page: string) => void }) => {
  return (
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
                <div key={item} className="flex items-center space-x-3 p-3 rounded-xl hover:bg-blue-50 transition-colors group cursor-default">
                  <Monitor className="text-blue-600 group-hover:scale-110 transition-transform" size={20} />
                  <span className="text-gray-700 font-medium group-hover:text-blue-600 transition-colors">{item}</span>
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
        <div className="flex flex-wrap justify-center gap-12">
          {['Sonos', 'Bose', 'Klipsch', 'Denon', 'Marantz'].map((brand) => (
            <span key={brand} className="text-2xl font-bold italic text-[#0B2447] opacity-30 hover:opacity-100 hover:text-blue-600 cursor-default transition-all duration-300">{brand}</span>
          ))}
        </div>
      </div>
    </section>

    <section className="py-20 bg-white">
      <div className="container mx-auto px-4 md:px-8">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {[
            { title: 'Outdoor Audio', desc: 'Weatherproof speakers for pools, patios, and outdoor living spaces.' },
            { title: 'Acoustic Treatment', desc: 'Professional sound dampening for theaters and media rooms.' },
            { title: 'Smart Integration', desc: 'Control your entire AV system from a single interface.' }
          ].map((item) => (
            <div key={item.title} className="p-8 bg-slate-50 rounded-3xl border border-transparent hover:border-blue-500/30 hover:bg-white hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 group">
              <h4 className="font-bold text-[#0B2447] mb-3 group-hover:text-blue-600">{item.title}</h4>
              <p className="text-sm text-gray-500">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  </div>
  );
};

// --- Sub-page Components ---

// --- Main App ---


interface SubPageProps {
  title: string;
  description: string;
  image: string;
  features: string[];
  faqs: { q: string; a: string }[];
  setActivePage: (page: string) => void;
  badge?: { text: string; sub: string };
}

const SubPage: React.FC<SubPageProps> = ({ title, description, image, features, faqs, setActivePage, badge }) => (
  <div className="pt-20">
    <section className="relative py-24 bg-[#0B2447] overflow-hidden">
      <div className="absolute inset-0 opacity-20">
        <img src={image} alt={title} className="w-full h-full object-cover" />
      </div>
      <div className="container mx-auto px-6 relative z-10">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          className="max-w-3xl"
        >
          <h1 className="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">{title}</h1>
          <p className="text-xl text-blue-100 mb-8 leading-relaxed">{description}</p>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg flex items-center space-x-2"
          >
            <span>Get Your Free Consultation Today</span>
            <ChevronRight size={20} />
          </button>
        </motion.div>
      </div>
    </section>

    <section className="py-24 bg-white">
      <div className="container mx-auto px-6">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          <motion.div
            initial={{ opacity: 0, x: -20 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
          >
            <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-8">Comprehensive Solutions</h2>
            <div className="space-y-6">
              {features.map((feature, idx) => (
                <div key={idx} className="flex items-start space-x-4">
                  <div className="mt-1 bg-blue-50 p-2 rounded-xl">
                    <CheckCircle2 className="text-blue-600" size={20} />
                  </div>
                  <p className="text-gray-600 text-lg leading-relaxed">{feature}</p>
                </div>
              ))}
            </div>
          </motion.div>
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            className="relative"
          >
            <img src={image} alt="Security Solution" className="rounded-[2.5rem] shadow-2xl w-full aspect-square object-cover" />
            {badge && (
              <div className="absolute -bottom-8 -right-8 bg-blue-600 text-white p-8 rounded-3xl shadow-2xl hidden md:block">
                <p className="text-4xl font-bold mb-1">{badge.text}</p>
                <p className="text-sm font-medium opacity-90 uppercase tracking-wider">{badge.sub}</p>
              </div>
            )}
          </motion.div>
        </div>
      </div>
    </section>

    <section className="py-24 bg-gray-50">
      <div className="container mx-auto px-6 max-w-4xl">
        <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-16 text-center">Frequently Asked Questions</h2>
        <div className="space-y-4">
          {faqs.map((faq, idx) => (
            <motion.div 
              key={idx}
              initial={{ opacity: 0, y: 10 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: idx * 0.1 }}
              className="bg-white p-8 rounded-2xl shadow-sm border border-gray-100"
            >
              <h3 className="text-xl font-bold text-[#0B2447] mb-3">{faq.q}</h3>
              <p className="text-gray-600 leading-relaxed">{faq.a}</p>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  </div>
);

export default function App() {
  const [activePage, setActivePage] = useState('home');

  // Scroll to top when page changes
  useEffect(() => {
    window.scrollTo(0, 0);
  }, [activePage]);

  const renderPage = () => {
    // Check if the active page is one of our dynamic sub-pages
    if (pages[activePage]) {
      const page = pages[activePage];
      return (
        <SubPage 
          title={page.title}
          description={page.description}
          image={page.image}
          features={page.features}
          faqs={page.faqs}
          setActivePage={setActivePage}
          badge={page.badge}
        />
      );
    }

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

      {/* Sticky Mobile CTA */}
      <div className="lg:hidden fixed bottom-6 left-0 right-0 z-40 px-6 pointer-events-none">
        <div className="flex space-x-3 pointer-events-auto bg-white/10 backdrop-blur-md p-2 rounded-[2rem] border border-white/20 shadow-2xl">
          <a 
            href="tel:7868227868"
            className="flex-1 bg-[#0B2447] text-white py-4 rounded-2xl font-bold text-center shadow-lg flex items-center justify-center space-x-2 active:scale-95 transition-transform"
          >
            <Phone size={18} />
            <span className="text-sm">Call Now</span>
          </a>
          <button 
            onClick={() => setActivePage('contact-us')}
            className="flex-1 bg-blue-600 text-white py-4 rounded-2xl font-bold text-center shadow-lg flex items-center justify-center space-x-2 active:scale-95 transition-transform"
          >
            <MessageSquare size={18} />
            <span className="text-sm">Quote</span>
          </button>
        </div>
      </div>

      <Footer setActivePage={setActivePage} />
    </div>
  );
}

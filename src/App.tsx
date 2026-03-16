/**
 * @license
 * SPDX-License-Identifier: Apache-2.0
 */

import React, { useState } from 'react';
import { 
  Camera, 
  Home, 
  Lock, 
  Flame, 
  Wifi, 
  Star, 
  Check, 
  ChevronDown, 
  ChevronUp, 
  Phone, 
  Mail, 
  Clock, 
  MapPin,
  Facebook,
  Instagram,
  ArrowRight,
  Zap,
  ShieldCheck,
  Smartphone
} from 'lucide-react';
import { motion, AnimatePresence } from 'motion/react';

const Header = () => {
  return (
    <div className="bg-yellow-50 border-b border-yellow-100 py-2 px-4 text-center text-xs text-yellow-800 font-medium">
      WordPress Theme files generated in <code className="bg-yellow-100 px-1 rounded">/wp-theme/</code> directory.
    </div>
  );
};

const MainHeader = () => {
  return (
    <header className="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
      <nav className="container mx-auto px-4 md:px-8 py-4 flex items-center justify-between">
        <div className="flex items-center space-x-2">
          <img 
            alt="Security on the Spot Logo" 
            className="h-10 md:h-12" 
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_gyCMySe6rBDd9YcgtSHL4hJ_7SLpT6waVlVB3Fl7IZLNM7-qBKJqGLFoompc_sfl1MdBQ-sgaP7cMTcydJo4vX_n6Ix_AKB9U8hehpxhJ-Zz9qdZt6-3OlOHENhVdeEkSgSq4Xfgs78cQOnfwDcrutTTKtz5IWlJd8mZsHvk-fAO-r7WrdC_QIlO6WVM-b6TYCrzMWb_q1qZdyDqprKMnz7mDVSOtOh9DY56mc0ve3dnazXZFp-sJa6lrwb9WZOf3Qme_b-rjBWR"
            referrerPolicy="no-referrer"
          />
        </div>
        <div className="hidden lg:flex items-center space-x-8 text-sm font-semibold text-[#0B2447]">
          <a className="hover:text-[#2563eb] transition" href="#">Security Cameras</a>
          <a className="hover:text-[#2563eb] transition" href="#">Home Automation</a>
          <a className="hover:text-[#2563eb] transition" href="#">Access Control</a>
          <a className="hover:text-[#2563eb] transition" href="#">Fire Systems</a>
          <a className="hover:text-[#2563eb] transition" href="#">Networking</a>
        </div>
        <div className="flex items-center space-x-4">
          <a className="hidden sm:block text-[#0B2447] font-bold text-sm" href="tel:7868227868">
            (786) 822-7868
          </a>
          <button className="bg-[#0B2447] hover:bg-[#2563eb] text-white px-6 py-2 rounded-full text-sm font-bold transition">
            Free Quote
          </button>
        </div>
      </nav>
    </header>
  );
};

const Hero = () => {
  return (
    <section className="relative min-h-[600px] flex items-center text-white py-20 overflow-hidden">
      {/* Background with overlay */}
      <div className="absolute inset-0 z-0">
        <img 
          src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&q=80&w=1600" 
          className="w-full h-full object-cover"
          alt="Security Background"
          referrerPolicy="no-referrer"
        />
        <div className="absolute inset-0 bg-[#0B2447]/85"></div>
      </div>
      
      <div className="container mx-auto px-4 md:px-8 relative z-10">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.6 }}
          className="max-w-2xl"
        >
          <div className="flex items-center space-x-2 mb-6">
            <div className="flex text-yellow-400">
              {[...Array(5)].map((_, i) => <Star key={i} size={16} fill="currentColor" />)}
            </div>
            <span className="text-sm font-medium">Rated 4.9 by Happy Customers</span>
          </div>
          <h1 className="text-4xl md:text-6xl font-bold leading-tight mb-6">
            Security Camera Installation & CCTV Systems in Miami HOLA
          </h1>
          <p className="text-lg md:text-xl mb-8 text-gray-200">
            Expert solutions from Security on the Spot. We provide UNV high-definition surveillance, mobile app integration, and professional installation for Miami's homes and businesses.
          </p>
          <div className="flex flex-col sm:flex-row gap-4">
            <button className="bg-[#2563eb] hover:bg-[#3E54AC] px-8 py-4 rounded-md font-bold text-lg transition shadow-lg">
              Get My Free Security Quote — (786) 822-7868
            </button>
          </div>
        </motion.div>
      </div>
    </section>
  );
};

const TrustBar = () => {
  const logos = [
    "https://lh3.googleusercontent.com/aida-public/AB6AXuCd_iQqVslxsiDSq-_X8LrTSasRfkMp0rD3nZK0L4d6OhuHRinNFoKDPwnnb7jWBv92U7Qjffl-DFABdUGe8Ru7-Neo1t9KBQ6tgTdH_dUWbQ7_QbEG7p14CDfUYMd3QnBUmB9cSwem-x3Kt_H1mVjo24YfK3OaHsLfSVDf6ga2ZTyTE8IBCoV0DRoOUtWADQ-aGiG81UIx-pHPBSrh4OOvYuMorRtKeL8bW7gX9DHUvNtgODEKbhIzQzNsCxu1cbzWmEQGWyEGyD8x",
    "https://lh3.googleusercontent.com/aida-public/AB6AXuAexWnInQIk2--6wKSE7_9fnuqBZT-WzKAoeoHv0Mu9lpOyeJ2BiyAQtJ-gPrfwf9pGYs8kM6vgPbHC5z4J_ptt7E0RX_5HajgRvf74_kwJVGZsO47zq-HnYUcirikAaA3RAZ59wEPPSjeV87NSm02K7OWEtNgZHeYLMZU_SojcSjpuZVtafcI33CK1dTiWFZYD28chy9PsjEbJysyoy6vV5kZ0PL2B_QQqD055yzmamhlunDlHNflLyDZ-aAtmi7uM-OAjzZW6iYM_",
    "https://lh3.googleusercontent.com/aida-public/AB6AXuDuRe6AwXLBxpLgo5mhoDtfNRIDhHL4nCxTdT1pYQ169q9Euy9qAtp5iTPElKy9fxju75bkKYYOMh1r8AGQqNMYtiOdYrN9xCLhG5C7bw5jVLx-vphBGuapiE4hm25IBrfmhDj8s8OiyP3_eiNUt6JdsB5yRsXWrTr8AmWOWCLj0-YVCPnXyIjEednzsYSzSW0ybEgVBjo2zJ8yb4v1ZW5CiFKqQuI0OAzB8AMqqTTl-gwZcwMhdVPACVmWl4fmzMkXmW2txXOZERUb",
    "https://lh3.googleusercontent.com/aida-public/AB6AXuCd_iQqVslxsiDSq-_X8LrTSasRfkMp0rD3nZK0L4d6OhuHRinNFoKDPwnnb7jWBv92U7Qjffl-DFABdUGe8Ru7-Neo1t9KBQ6tgTdH_dUWbQ7_QbEG7p14CDfUYMd3QnBUmB9cSwem-x3Kt_H1mVjo24YfK3OaHsLfSVDf6ga2ZTyTE8IBCoV0DRoOUtWADQ-aGiG81UIx-pHPBSrh4OOvYuMorRtKeL8bW7gX9DHUvNtgODEKbhIzQzNsCxu1cbzWmEQGWyEGyD8x",
    "https://lh3.googleusercontent.com/aida-public/AB6AXuDN9O2DekBoETU63jXdJQtRh50JEdqHgxj1_ok3BQGwjem0sp_653EUJl45SMpb5P7zoPdb5oDWRCUalmFFhId5zRm-FiH-36zFC2q28geL6wU_dOrAaIOuge98nJQd6pCPf8ohVr2hgwScP4FClR_oxNjUpNqWyQMLFSukNbUghgpk-aiWOceBCtAYAnxhNkq2ST2NC-R0Il9UICBRu_QHNEhOAGPC5YUyjUWzSf0d_3dXdKpDnuzVRSXf0IEve0x_YuROZx-6Gszu"
  ];

  return (
    <section className="bg-white py-12 border-b border-gray-100">
      <div className="container mx-auto px-4">
        <p className="text-center text-gray-500 uppercase tracking-widest text-sm font-bold mb-8">Trusted by Leading Brands in Miami</p>
        <div className="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition duration-500">
          {logos.map((logo, idx) => (
            <img key={idx} alt="Partner Logo" className="h-8" src={logo} referrerPolicy="no-referrer" />
          ))}
        </div>
      </div>
    </section>
  );
};

const Services = () => {
  const services = [
    {
      title: "Security Camera Installation",
      desc: "High-definition CCTV for commerce, warehouses, and homes.",
      icon: <Camera className="w-7 h-7 text-[#2563eb]" />
    },
    {
      title: "Smart Home Automation",
      desc: "Control lights, locks, and temperature from a single intuitive app.",
      icon: <Home className="w-7 h-7 text-[#2563eb]" />
    },
    {
      title: "Access Control Systems",
      desc: "Video intercoms, mag-locks, and managed entry/exit solutions.",
      icon: <Lock className="w-7 h-7 text-[#2563eb]" />
    },
    {
      title: "Fire Systems",
      desc: "Commercial grade fire alarm design and professional installation.",
      icon: <Flame className="w-7 h-7 text-[#2563eb]" />
    },
    {
      title: "Networking & Fiber",
      desc: "Structured cabling and robust Wi-Fi networks for seamless connectivity.",
      icon: <Wifi className="w-7 h-7 text-[#2563eb]" />
    }
  ];

  return (
    <section className="py-20 bg-[#F8FAFC]">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-4">Miami’s Comprehensive Security & Technology Solutions</h2>
          <div className="w-20 h-1 bg-[#2563eb] mx-auto"></div>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
          {services.map((service, idx) => (
            <motion.div 
              key={idx}
              whileHover={{ y: -5 }}
              className="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100 flex flex-col items-center text-center"
            >
              <div className="w-14 h-14 bg-blue-50 rounded-full flex items-center justify-center mb-4">
                {service.icon}
              </div>
              <h3 className="text-lg font-bold mb-2 text-[#0B2447] leading-tight">{service.title}</h3>
              <p className="text-sm text-gray-600 mb-4">{service.desc}</p>
              <a className="mt-auto text-[#2563eb] text-sm font-bold hover:underline" href="#">Learn More →</a>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

const FeaturedPackage = () => {
  return (
    <section className="py-20">
      <div className="container mx-auto px-4">
        <div className="bg-[#0B2447] rounded-3xl overflow-hidden shadow-2xl flex flex-col lg:flex-row">
          <div className="p-10 lg:p-16 lg:w-3/5 text-white">
            <h2 className="text-3xl md:text-5xl font-bold mb-6">Complete Home Security Package for $1,499</h2>
            <p className="text-gray-300 mb-8 text-lg">We believe professional security should be transparent. Our Miami Home Security Package includes high-definition cameras, professional installation, and a 3-year total guarantee—all for one flat fee with no monthly contracts.</p>
            <ul className="space-y-4 mb-10">
              {[
                { label: "Full Installation", desc: "Get your system professionally installed for one flat fee." },
                { label: "No Monthly Contracts", desc: "100% Transparent Pricing. Own your equipment outright." },
                { label: "3-Year Total Guarantee", desc: "Includes Hardware Warranty + Installation Warranty." }
              ].map((item, idx) => (
                <li key={idx} className="flex items-start space-x-3">
                  <Check className="w-6 h-6 text-green-400 mt-1 flex-shrink-0" />
                  <span><strong>{item.label}:</strong> {item.desc}</span>
                </li>
              ))}
            </ul>
            <button className="bg-white text-[#0B2447] hover:bg-gray-100 px-8 py-4 rounded-md font-bold text-lg transition">
              Get This $1,499 Offer Now
            </button>
          </div>
          <div className="lg:w-2/5 relative min-h-[400px]">
            <img 
              alt="Professional Security Hardware" 
              className="absolute inset-0 w-full h-full object-cover" 
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9UGmpCKKFfo3mqcfNHeqzBg7nbzARvXZuJomAQDFH0DagpuZu3SPeu5r-FiNt5z0DCrMZw3h5P0kNlu7qa9JVCiQO1fjLjqVvK9ZQO5R8V6EAugPFXq0ZNmkEAoZXUaKmT2CsKFupapsCTmzZPyNAVjIu5W2jZpqjY-NbfYnXW98E-GatNtIBcYHLhOGeFKNe1mNfSVNseV_APBrDLhKA3FXi39fQST0QEbOmCVgGUW5TvlqULuZQBGq8qOyxdJLoPkDuYDWbALtv"
              referrerPolicy="no-referrer"
            />
            <div className="absolute bottom-6 right-6 bg-[#2563eb] text-white p-6 rounded-2xl shadow-xl max-w-[200px] text-center">
              <p className="text-sm font-bold uppercase mb-1">In Just 1 Day</p>
              <p className="text-2xl font-black">FULLY SECURED</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

const WhyChooseUs = () => {
  return (
    <section className="py-20 bg-white">
      <div className="container mx-auto px-4">
        <div className="flex flex-col lg:flex-row items-center gap-16">
          <div className="lg:w-1/2">
            <div className="grid grid-cols-2 gap-4">
              <img 
                alt="Security on the Spot technicians" 
                className="rounded-2xl shadow-lg" 
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDM4EiX5TCMmz0qBKVDLLs9sfTvpU_SkCGLLZ70rPHHDfoXVuScwz5nQF0m5JQhnsuwOIbLjC98v4A3QIVjx7iwQ5pW4JeWTrAOaH0UNF4_sZH1t_QSICtTTz2Lm8PCQqF3U-jXVB8Ue91K9Q6DC7KxVLa2TeGuWYU40xRfM-2rphB_mdAPwPsdxBRh9qj59zOpnW1SBFLxegte23lS0AQLWt_yxGjy9quieiBEyjZuJ-ZEzNlbjTw82ktiSJe4TmJK5_mtiXWKWcoD"
                referrerPolicy="no-referrer"
              />
              <img 
                alt="UNV Security Camera Interface" 
                className="rounded-2xl shadow-lg translate-y-8" 
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1WQGB0GVCl5iqli775dIvIyUHqgkUXY9g086LOvTsn8Qu0gxGwpig2FpwnKZHfAiCNUviyUx2xr5bzFkKCXTCYYtCLL6gVzCpgT7y2PwtpWNWP5JQ0CdWGmNBO0GuTRzrzHkiK8urxN4kbyHI3JcrY6fIImWTQwiD94kWCXSrKZN3SpOqknqDtd6cn0X_5Nps7CoWc8494raRXw3q5jBVyPJ652yLr3C9nCQsi6Br9nZXITH91oHdgVYozCaXZJaG6pMfC1ak-ziq"
                referrerPolicy="no-referrer"
              />
            </div>
          </div>
          <div className="lg:w-1/2">
            <h2 className="text-3xl md:text-4xl font-bold text-[#0B2447] mb-6">Miami's Trusted Security Partner for Over 20 Years</h2>
            <p className="text-gray-600 mb-8">Serving all of Miami-Dade including Doral, Kendall, Brickell, Coral Gables, and Miami Beach. We specialize in high-tech UNV cameras and professional installations that give you total peace of mind.</p>
            <div className="space-y-6">
              {[
                { 
                  title: "Years of Experience", 
                  desc: "Industry-leading expertise for complex residential and commercial setups.",
                  val: "20+",
                  icon: null
                },
                { 
                  title: "Fast & Professional Installation", 
                  desc: "Expert wiring with minimal disruption to your home or business.",
                  val: null,
                  icon: <Zap className="w-6 h-6" />
                },
                { 
                  title: "High-Tech Mobile Integration", 
                  desc: "Monitor your property in real-time from anywhere in the world via app.",
                  val: null,
                  icon: <Smartphone className="w-6 h-6" />
                }
              ].map((item, idx) => (
                <div key={idx} className="flex items-center space-x-4">
                  <div className="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-[#2563eb] font-bold">
                    {item.val || item.icon}
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
  );
};

const FAQ = () => {
  const [openIdx, setOpenIdx] = useState<number | null>(0);

  const faqs = [
    {
      q: "Where is Security on the Spot located?",
      a: "Our headquarters are located at 4861 NW 72nd Ave, Miami, FL 33166. We serve all of Miami-Dade and surrounding South Florida areas."
    },
    {
      q: "What areas do you serve in Miami and South Florida?",
      a: "We serve all of Miami-Dade including Doral, Kendall, Brickell, Coral Gables, and Miami Beach, as well as parts of Broward County."
    },
    {
      q: "Do you offer free consultations?",
      a: "Yes! We provide on-site or remote consultations to assess your specific security needs and provide a tailored quote. Call us at (786) 822-7868."
    }
  ];

  return (
    <section className="py-20 bg-[#F8FAFC]">
      <div className="container mx-auto px-4 max-w-4xl">
        <div className="text-center mb-16">
          <h2 className="text-3xl font-bold text-[#0B2447] mb-4">Frequently Asked Questions</h2>
          <p className="text-gray-500">Expert answers for your Miami security needs</p>
        </div>
        <div className="space-y-4">
          {faqs.map((faq, idx) => (
            <div key={idx} className="bg-white rounded-lg border border-gray-200 overflow-hidden">
              <button 
                onClick={() => setOpenIdx(openIdx === idx ? null : idx)}
                className="w-full flex justify-between items-center p-6 font-bold text-[#0B2447] text-left"
              >
                {faq.q}
                {openIdx === idx ? <ChevronUp className="w-5 h-5" /> : <ChevronDown className="w-5 h-5" />}
              </button>
              <AnimatePresence>
                {openIdx === idx && (
                  <motion.div 
                    initial={{ height: 0, opacity: 0 }}
                    animate={{ height: 'auto', opacity: 1 }}
                    exit={{ height: 0, opacity: 0 }}
                    className="overflow-hidden"
                  >
                    <div className="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-50">
                      {faq.a}
                    </div>
                  </motion.div>
                )}
              </AnimatePresence>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

const FinalCTA = () => {
  return (
    <section className="py-20 bg-[#0B2447] relative overflow-hidden text-center">
      <div className="container mx-auto px-4 relative z-10">
        <h2 className="text-3xl md:text-5xl font-bold text-white mb-6">Ready to Protect Your Property with Security on the Spot?</h2>
        <p className="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">Get your free consultation today and discover why Miami trusts us for high-end security for over 20 years.</p>
        <button className="bg-[#2563eb] hover:bg-[#3E54AC] text-white px-10 py-5 rounded-full font-bold text-xl transition shadow-xl">
          Call for a Free Quote — (786) 822-7868
        </button>
      </div>
      {/* Background Graphic */}
      <div className="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-[#2563eb]/20 rounded-full blur-3xl"></div>
      <div className="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-96 h-96 bg-[#2563eb]/20 rounded-full blur-3xl"></div>
    </section>
  );
};

const Footer = () => {
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
            <div className="flex space-x-4">
              <a className="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#2563eb] transition" href="#">
                <Facebook size={20} />
              </a>
              <a className="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#2563eb] transition" href="#">
                <Instagram size={20} />
              </a>
            </div>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6 text-white">Quick Links</h4>
            <ul className="space-y-4 text-gray-400">
              <li><a className="hover:text-white transition" href="#">Security Cameras</a></li>
              <li><a className="hover:text-white transition" href="#">Home Automation</a></li>
              <li><a className="hover:text-white transition" href="#">Access Control</a></li>
              <li><a className="hover:text-white transition" href="#">Fire Systems</a></li>
              <li><a className="hover:text-white transition" href="#">Networking</a></li>
            </ul>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6 text-white">Service Areas</h4>
            <ul className="space-y-4 text-gray-400">
              <li>Doral & Kendall</li>
              <li>Brickell & Downtown</li>
              <li>Coral Gables</li>
              <li>Miami Beach</li>
              <li>South Florida Region</li>
            </ul>
          </div>
          <div>
            <h4 className="font-bold text-lg mb-6 text-white">Contact Us</h4>
            <ul className="space-y-4 text-gray-400">
              <li className="flex items-start space-x-2">
                <MapPin className="w-5 h-5 text-[#2563eb] mt-1 flex-shrink-0" />
                <span>4861 NW 72nd Ave, Miami, FL 33166</span>
              </li>
              <li className="flex items-center space-x-2">
                <Phone className="w-5 h-5 text-[#2563eb] flex-shrink-0" />
                <a className="hover:text-white transition" href="tel:7868227868">(786) 822-7868</a>
              </li>
              <li className="flex items-center space-x-2">
                <Clock className="w-5 h-5 text-[#2563eb] flex-shrink-0" />
                <span>Mon-Fri: 8:00 AM – 6:00 PM</span>
              </li>
            </ul>
          </div>
        </div>
        <div className="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
          <p>© 2025 Security On The Spot • All Rights Reserved</p>
          <p className="mt-4 md:mt-0">Professional Security Solutions in Miami</p>
        </div>
      </div>
    </footer>
  );
};

export default function App() {
  return (
    <div className="min-h-screen bg-white font-sans selection:bg-blue-100">
      <Header />
      <MainHeader />
      <main>
        <Hero />
        <TrustBar />
        <Services />
        <FeaturedPackage />
        <WhyChooseUs />
        <FAQ />
        <FinalCTA />
      </main>
      <Footer />
    </div>
  );
}

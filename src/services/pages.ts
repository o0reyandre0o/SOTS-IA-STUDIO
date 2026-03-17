export interface PageContent {
  title: string;
  description: string;
  image: string;
  features: string[];
  faqs: { q: string; a: string }[];
  badge?: { text: string; sub: string };
}

export const pages: Record<string, PageContent> = {
  'commercial-warehouse': {
    title: "Commercial & Warehouse Security Cameras in Miami",
    description: "Protect your assets with heavy-duty CCTV solutions. We provide professional installation for warehouses, offices, and industrial complexes in South Florida.",
    image: "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80",
    features: [
      "Remote Asset Tracking: Monitor your warehouse floor or office 24/7 from any device.",
      "Smart Motion Detection: Instant AI alerts for unauthorized access during off-hours.",
      "System Integration: Seamlessly works with your access control miami and networking setup.",
      "Safety Compliance: Systems designed to meet industry insurance and workplace safety standards."
    ],
    faqs: [
      { q: "Do you offer security camera installation for Miami warehouses?", a: "Yes. We provide professional installation for warehouses, offices, and industrial complexes in South Florida." },
      { q: "Can I monitor multiple locations from one app?", a: "Yes, our advanced NVR systems allow you to integrate multiple locations into a single dashboard." }
    ],
    badge: { text: "24/7", sub: "Monitoring" }
  },
  'restaurants': {
    title: "Security Camera Systems for Miami Restaurants",
    description: "Keep your staff, customers, and inventory safe. Our restaurant security cameras miami systems help reduce theft and improve operational efficiency.",
    image: "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&q=80",
    features: [
      "Loss Prevention: Monitor POS areas and inventory storage to prevent internal theft.",
      "Staff Safety: Ensure a safe working environment and monitor kitchen operations.",
      "Customer Experience: Resolve disputes and ensure a safe dining environment.",
      "Remote Management: Keep an eye on your restaurant even when you're not there."
    ],
    faqs: [
      { q: "Can I see my restaurant from my phone?", a: "Yes, all our systems include a mobile app that allows you to view live and recorded footage." },
      { q: "Are the cameras heat-resistant for the kitchen?", a: "We use specialized cameras designed to withstand the humidity and heat of a professional kitchen." }
    ],
    badge: { text: "HD", sub: "Video Quality" }
  },
  'small-businesses': {
    title: "Security Cameras for Miami Small Businesses",
    description: "Affordable and reliable security solutions for local shops, boutiques, and offices. Protect your livelihood with professional CCTV installation.",
    image: "https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80",
    features: [
      "Theft Deterrence: Visible cameras prevent shoplifting and vandalism.",
      "Employee Monitoring: Improve productivity and ensure safety protocols are followed.",
      "Evidence Collection: High-definition footage for insurance and legal purposes.",
      "Scalable Systems: Start small and expand as your business grows."
    ],
    faqs: [
      { q: "Is a security system expensive for a small business?", a: "We offer scalable solutions that fit any budget, ensuring you get the protection you need." },
      { q: "How long does installation take?", a: "Most small business installations are completed within a single day." }
    ],
    badge: { text: "24/7", sub: "Protection" }
  },
  'retail': {
    title: "Retail CCTV Systems in Miami",
    description: "Reduce shrinkage and improve store safety with high-performance retail security cameras. Tailored solutions for Miami's shopping districts.",
    image: "https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80",
    features: [
      "Facial Recognition: High-resolution cameras for clear identification.",
      "Foot Traffic Analysis: Use surveillance data to optimize store layout.",
      "POS Integration: Sync video with transaction data to prevent fraud.",
      "Real-Time Alerts: Get notified of suspicious activity instantly."
    ],
    faqs: [
      { q: "Can the cameras help with shoplifting?", a: "Yes, visible cameras act as a strong deterrent and provide essential evidence." },
      { q: "Can I monitor my store after hours?", a: "Yes, our systems include motion detection alerts that notify you on your phone." }
    ],
    badge: { text: "HD", sub: "Retail Security" }
  },
  'families': {
    title: "Home Security Cameras for Miami Families",
    description: "Protect your loved ones and your home with easy-to-use surveillance systems. Peace of mind for families in Coral Gables, Kendall, and beyond.",
    image: "https://images.unsplash.com/photo-1513584684374-8bdb7489feef?auto=format&fit=crop&q=80",
    features: [
      "Smart Home Integration: Works seamlessly with your existing smart home setup.",
      "Two-Way Audio: Talk to visitors or family members through your cameras.",
      "Night Vision: Clear visibility even in total darkness.",
      "Privacy Controls: Easily manage who has access to your home's footage."
    ],
    faqs: [
      { q: "Can I see my home from work?", a: "Yes, our systems allow you to view live and recorded footage from any mobile device." },
      { q: "Are the cameras weather-resistant?", a: "Our outdoor cameras are designed to withstand rain, heat, and humidity." }
    ],
    badge: { text: "24/7", sub: "Peace of Mind" }
  },
  'car-workshops': {
    title: "Security Cameras for Miami Car Workshops",
    description: "Protect expensive tools, equipment, and customer vehicles. Specialized security solutions for automotive shops in Hialeah and Doral.",
    image: "https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&q=80",
    features: [
      "Tool Protection: Monitor high-value equipment and prevent theft.",
      "Vehicle Safety: Ensure customer cars are protected while on your property.",
      "Liability Coverage: Clear footage to resolve disputes and insurance claims.",
      "Durable Hardware: Cameras built to withstand workshop environments."
    ],
    faqs: [
      { q: "Can the cameras see inside the vehicles?", a: "Depending on placement, our cameras can provide clear views of the interior and exterior." },
      { q: "Are the cameras resistant to grease and oil?", a: "We use specialized cameras designed to withstand automotive shop environments." }
    ],
    badge: { text: "HD", sub: "Workshop Security" }
  },
  'control-integration': {
    title: "Smart Home Integration & Centralized Control",
    description: "Unify your home's technology. Control lighting, security, climate, and audio from a single, intuitive interface in Miami.",
    image: "https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&q=80",
    features: [
      "One-App Control: Manage your entire home from your smartphone or tablet.",
      "Custom Scenes: Set the mood for movie night or dinner with one tap.",
      "Voice Control: Integration with Alexa, Google Assistant, and Siri.",
      "Energy Efficiency: Automate systems to reduce energy consumption."
    ],
    faqs: [
      { q: "Can I add more devices later?", a: "Yes, our systems are scalable, allowing you to add more features as your needs evolve." },
      { q: "Is the system easy to use?", a: "Our interfaces are designed to be intuitive and user-friendly for the whole family." }
    ],
    badge: { text: "100%", sub: "Integration" }
  },
  'lighting-control': {
    title: "Smart Lighting & Motorized Shade Control",
    description: "Enhance your home's ambiance and security. Automated lighting and shade solutions for luxury homes in Miami.",
    image: "https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&q=80",
    features: [
      "Automated Schedules: Lights and shades adjust based on the time of day.",
      "Security Lighting: Program lights to turn on when motion is detected.",
      "Natural Light Management: Motorized shades protect your interior from UV rays.",
      "Elegant Design: Stylish keypads and interfaces that complement your decor."
    ],
    faqs: [
      { q: "Can I control my lights from my phone?", a: "Yes, our systems include a mobile app for remote control from anywhere." },
      { q: "Can the system help save energy?", a: "Yes, by automating lighting and using energy-efficient bulbs, you can reduce consumption." }
    ],
    badge: { text: "Energy", sub: "Efficient" }
  },
  'multi-zone-audio': {
    title: "Multi-Zone Audio Installation in Miami",
    description: "Music in every room. High-fidelity audio systems for homes and businesses across South Florida.",
    image: "https://images.unsplash.com/photo-1516280440614-37939bbacd81?auto=format&fit=crop&q=80",
    features: [
      "Independent Zones: Play different music in different rooms simultaneously.",
      "Streaming Integration: Access Spotify, Apple Music, and more directly.",
      "Architectural Speakers: In-wall and in-ceiling speakers for a clean look.",
      "Outdoor Audio: Weatherproof sound systems for pools and patios."
    ],
    faqs: [
      { q: "Can I play different music in different rooms?", a: "Yes, our systems allow you to stream different music to each zone independently." },
      { q: "Is the system easy to control?", a: "Our interfaces are designed to be intuitive and user-friendly." }
    ],
    badge: { text: "Hi-Fi", sub: "Audio Quality" }
  },
  'home-theater': {
    title: "Home Theater Systems & Installation",
    description: "The ultimate cinema experience at home. Professional design and installation for Miami's most exclusive residences.",
    image: "https://images.unsplash.com/photo-1593784991095-a205069470b6?auto=format&fit=crop&q=80",
    features: [
      "4K/8K Projection: Crystal-clear visuals on massive screens.",
      "Surround Sound: Immersive audio that puts you in the center of the action.",
      "Acoustic Treatment: Optimized sound quality for any room size.",
      "Custom Seating: Luxury theater seating for maximum comfort."
    ],
    faqs: [
      { q: "Can I use my existing speakers?", a: "Depending on quality, we can often integrate your existing speakers into a new system." },
      { q: "How long does installation take?", a: "Most home theater installations are completed within a few days." }
    ],
    badge: { text: "4K", sub: "Ultra HD" }
  },
  'video-wall-installation': {
    title: "High-Impact Video Walls in Miami",
    description: "Stunning visual displays for commercial spaces, sports bars, and luxury homes. Professional video wall installation in South Florida.",
    image: "https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80",
    features: [
      "Seamless Displays: Ultra-thin bezels for a unified visual experience.",
      "Custom Configurations: Any size or shape to fit your space.",
      "High Brightness: Clear visibility even in well-lit environments.",
      "Content Management: Easy-to-use systems for updating your display."
    ],
    faqs: [
      { q: "What is a video wall?", a: "A video wall is a multi-monitor setup that consists of multiple computer monitors, video projectors, or television sets tiled together contiguously or overlapped in order to form one large screen." },
      { q: "Can I show different content on each screen?", a: "Yes, our systems allow for flexible content layouts, including showing one large image or multiple smaller ones." }
    ],
    badge: { text: "8K", sub: "Visual Impact" }
  },
  'intercom-systems': {
    title: "Wireless Video Intercom Installation",
    description: "See and speak with visitors from anywhere. Modern video intercom systems for Miami homes and businesses.",
    image: "https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&q=80",
    features: [
      "Mobile Access: Answer your door from your smartphone, anywhere.",
      "High-Definition Video: Clear view of your visitors, day or night.",
      "Keyless Entry: Unlock doors or gates remotely for trusted guests.",
      "Visitor History: Keep a log of who visited and when."
    ],
    faqs: [
      { q: "Can I see visitors from my phone?", a: "Yes, our intercom systems include a mobile app for remote communication." },
      { q: "Is the system easy to install?", a: "Most intercom installations are completed within a single day." }
    ],
    badge: { text: "HD", sub: "Video Intercom" }
  },
  'entry-exit-systems': {
    title: "Entry & Exit Systems: Gates, Turnstiles & Barriers",
    description: "Secure your perimeter. Professional installation of access control systems for Miami's commercial and residential properties.",
    image: "https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&q=80",
    features: [
      "Automated Gates: Secure vehicle entry for homes and businesses.",
      "Turnstiles: Manage pedestrian flow in high-traffic areas.",
      "Barrier Arms: Control parking lot and driveway access.",
      "Integrated Access: Works with your existing security and intercom systems."
    ],
    faqs: [
      { q: "Can I manage access from my phone?", a: "Yes, our entry and exit systems include a mobile app for remote management." },
      { q: "Is the system easy to use?", a: "Our interfaces are designed to be intuitive and user-friendly." }
    ],
    badge: { text: "Secure", sub: "Access" }
  },
  'security-cameras-security-on-the-spot': {
    title: "Security Cameras Miami: Professional CCTV Installation",
    description: "Protect your property with high-definition surveillance and 24/7 remote access. Miami's #1 Rated Security Camera Installation Team.",
    image: "https://securityonthespot.com/wp-content/uploads/2025/09/restaurants-restaurant-outdoor-security-camera-scaled.jpg",
    features: [
      "HD Resolution: Crystal-clear footage for clear identification.",
      "Remote Viewing: Access your cameras from anywhere via mobile app.",
      "Motion Alerts: Get instant notifications of suspicious activity.",
      "Professional Installation: Clean and efficient setup by experts."
    ],
    faqs: [
      { q: "Where is Security on the Spot located?", a: "Our headquarters are at 4861 NW 72nd Ave, Miami, FL 33166." },
      { q: "Do you offer free consultations?", a: "Yes, we provide a free consultation to assess your security needs." }
    ],
    badge: { text: "4.9", sub: "Google Rating" }
  },
  'home-automation-smart-homes-in-miami': {
    title: "Smart Home Automation Miami",
    description: "Experience the future of living with smart home integration in Miami. Control your entire home from a single interface.",
    image: "https://securityonthespot.com/wp-content/uploads/2025/09/home-automation-smart-homes-in-miami-miami-smart-home-control-scaled.jpg",
    features: [
      "Smart Lighting Control: Automate your lights for energy efficiency and ambiance.",
      "Climate Integration: Control your AC and heating remotely.",
      "Automated Shades: Manage natural light with motorized solutions.",
      "Whole Home Audio: Immersive sound in every room of your house."
    ],
    faqs: [
      { q: "Can I control my home from my phone?", a: "Yes, all our systems include a mobile app for remote control." },
      { q: "Is the system easy to use?", a: "Our interfaces are designed to be intuitive and user-friendly." }
    ],
    badge: { text: "100%", sub: "Integrated" }
  },
  'access-control': {
    title: "Access Control Systems Miami",
    description: "Secure your property with advanced keyless entry, intercoms, and managed access solutions.",
    image: "https://securityonthespot.com/wp-content/uploads/2025/09/access-control-systems-miami-keyless-entry-installation-scaled.jpg",
    features: [
      "Keyless Entry: Fob and mobile-based access for employees and residents.",
      "Intercom Systems: Video intercom installation for multi-family buildings.",
      "Cloud Management: Manage permissions and view access logs from anywhere.",
      "Biometric Readers: High-security fingerprint and facial recognition options."
    ],
    faqs: [
      { q: "Can I manage access from my phone?", a: "Yes, our systems include a cloud-based dashboard for remote management." },
      { q: "Do you offer intercom systems?", a: "Yes, we specialize in video intercom installation for Miami properties." }
    ],
    badge: { text: "Secure", sub: "Access" }
  },
  'networking-fiber-optics': {
    title: "Networking & Structured Cabling Miami",
    description: "Reliable networking services in Miami. High-speed Wi-Fi, structured cabling, and secure network infrastructure.",
    image: "https://securityonthespot.com/wp-content/uploads/2025/09/networking-services-miami-structured-cabling-scaled.jpg",
    features: [
      "Enterprise Wi-Fi: Robust and high-speed wireless coverage for your entire property.",
      "Cat6 Cabling: Professional structured cabling for reliable data transmission.",
      "Fiber Optics: High-bandwidth solutions for large properties and businesses.",
      "Network Security: Enterprise-grade protocols to protect your data."
    ],
    faqs: [
      { q: "Do you offer Wi-Fi optimization?", a: "Yes, we specialize in designing and optimizing high-performance Wi-Fi networks." },
      { q: "What is structured cabling?", a: "It's a standardized way of cabling your building for data and voice communications." }
    ],
    badge: { text: "High", sub: "Speed" }
  },
  'fire-systems': {
    title: "Commercial Fire Alarm Installation Miami",
    description: "Life safety systems that meet all Miami-Dade fire codes. Professional design, installation, and monitoring.",
    image: "https://securityonthespot.com/wp-content/uploads/2025/09/fire-alarm-systems-miami-commercial-installation-scaled.jpg",
    features: [
      "NFPA 72 Compliant: Systems designed to meet all national fire safety standards.",
      "UL Listed Monitoring: 24/7 professional monitoring for immediate dispatch.",
      "Miami-Dade Certified: We ensure your system meets all local fire codes.",
      "Annual Inspections: Comprehensive testing and certification services."
    ],
    faqs: [
      { q: "Do you offer fire alarm monitoring?", a: "Yes, we provide 24/7 UL-listed monitoring for all our fire systems." },
      { q: "Can you help with fire code compliance?", a: "Yes, we specialize in ensuring systems meet Miami-Dade fire codes." }
    ],
    badge: { text: "Safety", sub: "First" }
  }
};

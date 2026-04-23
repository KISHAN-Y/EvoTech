# EvoTech Customs

EvoTech Customs is a high-end web application designed for car enthusiasts and dealerships to showcase luxury vehicles. The platform features immersive 360-degree car rotations, brand-specific galleries, and an interactive user experience powered by modern web technologies.

## 🚀 Features

- **360° Car View**: Interactive 360-degree rotation of vehicle images on the homepage.
- **Brand Showcases**: Dedicated pages for major luxury brands including Audi, BMW, Jaguar, Porsche, and more.
- **Dynamic Animations**: Smooth transitions and cursor effects using GSAP and Mouse Follower.
- **Contact Integration**: Embedded Google Maps and contact form for easy inquiries.
- **Responsive Design**: Optimized for various screen sizes.
- **Dockerized Environment**: Ready for deployment with Docker and Apache.

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript (GSAP, jQuery, Mouse Follower)
- **Backend**: PHP 8.2 (as configured in Dockerfile)
- **DevOps**: Docker, Render (ready for deployment)
- **Styling**: SCSS/CSS

## 📂 Project Structure

```text
├── ALL CAR/           # Brand-specific assets and additional pages
├── CARMAINPAGES/      # Secondary brand layout components
├── CSS&JS/            # Global stylesheets, JavaScript logic, and fonts
├── IMAGES/            # Vehicle images, 360° frames, and brand logos
├── index.php          # Homepage with 360-degree interactive viewer
├── carmain.php        # Main car showcase landing page
├── [BRAND].php        # Brand-specific pages (e.g., AUDI.php, BMW.php)
├── contact.php        # Contact information and location page
├── Dockerfile         # Docker configuration for Apache/PHP
└── render.yaml        # Render deployment configuration
```

## ⚙️ Installation & Setup

### Local Setup (PHP)

1. Ensure you have PHP 8.2 or higher installed.
2. Clone the repository to your local web server directory (e.g., `htdocs` for XAMPP).
3. Start your local server.
4. Access the project via `http://localhost/evotech-customs`.

### Docker Setup

1. Build the Docker image:
   ```bash
   docker build -t evotech-customs .
   ```
2. Run the container:
   ```bash
   docker run -p 8080:80 evotech-customs
   ```
3. Open your browser and navigate to `http://localhost:8080`.

## 🌐 Deployment

This project is configured for easy deployment on **Render** using the included `render.yaml` and `Dockerfile`.

## 🤝 Contributing

1. Fork the project.
2. Create your feature branch (`git checkout -b feature/AmazingFeature`).
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

# Pixa  

Pixa is a simple AI-powered image generator using [Pollinations AI](https://pollinations.ai). It allows users to create stunning visuals based on text prompts, with customizable dimensions and a random seed for unique outputs.  

## Features  
- Generate AI-based images from textual prompts.  
- Customize width, height, and seed values for personalized results.  
- Responsive and user-friendly design built with PHP and CSS.  

---

## Demo  
Here's an example of an image generated using Pixa:  

**Prompt:** _"A serene mountain landscape during sunrise"_  
- **Width:** 1280  
- **Height:** 720  
- **Seed:** 42  

Result:  
![Example Image](sample.jpg)  

---

## Installation  

1. Clone the repository:  
   ```bash  
   git clone https://github.com/cedonulfi/pixa.git  
   cd pixa  
   ```  

2. Deploy to a PHP-enabled server or local environment (e.g., XAMPP, MAMP, or LAMP).  

3. Access the application in your browser via `http://localhost/pixa` or the domain where you deployed it.  

---

## Usage  

1. **Input Form:**  
   Open `index.php` in your browser. Enter the following fields:  
   - **Prompt:** Describe the image you want to generate (e.g., _"A futuristic city at night"_).  
   - **Width:** Desired width of the image in pixels (e.g., `1280`).  
   - **Height:** Desired height of the image in pixels (e.g., `720`).  
   - **Seed:** A random number to ensure unique outputs (e.g., `42`).  

2. **Generate:**  
   Click on the "Generate Image" button to fetch the image from Pollinations AI.  

3. **View Result:**  
   The generated image will appear below the form.  

---

## Example Prompts  

- _"A magical forest with glowing mushrooms at night"_  
- _"A colorful nebula in outer space"_  
- _"A retro-futuristic robot in a cyberpunk city"_  

---

## Folder Structure  

```plaintext  
pixa/  
├── index.php   # Main application file with form and logic.  
├── style.css   # CSS for responsive and attractive design.  
└── README.md   # Documentation for the project.  
```  

---

## Feedback and Suggestions  

Your feedback is highly appreciated!  
- **Ideas for New Features:**  
  If there are features you'd like to see, let me know in the issues tab or create a pull request.  

- **Known Limitations:**  
  - Images are dependent on Pollinations AI; server downtime may affect availability.  
  - Lack of built-in caching for faster results on repeated queries.  

Feel free to open an issue or reach out with suggestions for improvements.  

---

## License  

This project is licensed under the [MIT License](LICENSE).  

---

## Contributing  

1. Fork the repository.  
2. Create a new branch for your feature (`git checkout -b feature-name`).  
3. Commit your changes (`git commit -m "Add some feature"`).  
4. Push to the branch (`git push origin feature-name`).  
5. Open a pull request.  

---

## Credits  

- [Pollinations AI](https://pollinations.ai) for powering the image generation.  
- Built with ❤️ by [cedonulfi](https://github.com/cedonulfi).  


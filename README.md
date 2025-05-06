# MySQL-ESP32-REST-Tutorial

A **beginner-friendly tutorial** to connect an **ESP32 microcontroller** with a **MySQL database** using a **REST API**. This repository is part of a hands-on learning series created by **Yarana IoT Guru** on YouTube, designed to teach IoT, embedded systems, and full-stack development in a practical and engaging way.

📺 **Watch the Full Video Tutorial Playlist on YouTube (Hindi):**  
▶️ [ESP32 + MySQL + REST API Full Tutorial](https://www.youtube.com/playlist?list=PLdtJcYYUYjvyyEk-qvBLnNHepWyZmFq3h)

🌐 **Live API Demo URL Structure:**  
All PHP-based REST API endpoints are hosted at: **[https://yaranaiotguru.in/tutorial/](https://yaranaiotguru.in/tutorial/)**

---

## 📌 Project Overview

This project provides a complete guide to building an **Internet of Things (IoT)** system where an **ESP32 microcontroller** communicates with a **MySQL database** through a **PHP-based REST API**. The tutorial is designed for **beginners**, hobbyists, and IoT enthusiasts, covering both hardware (ESP32 programming using Arduino IDE) and software (PHP API and MySQL database setup).

### 🎯 What You’ll Learn
- Connect an **ESP32** to a Wi-Fi network and send/receive data using **HTTP requests**.
- Create a **REST API** in PHP to handle database operations (Insert and Read).
- Set up a **MySQL database** to store and retrieve IoT sensor data.
- Perform **HTTP POST** to insert data and **HTTP GET** to fetch data.
- Build a full-stack IoT project with real-world applications, such as logging temperature, humidity, or other sensor data.

### 💡 Real-World Applications
- **Smart Home Systems**: Store sensor data (e.g., motion, temperature) in a database for automation.
- **Environmental Monitoring**: Log data from sensors like DHT11, BME280, or MQ135 for analysis.
- **IoT Dashboards**: Fetch data from the database to display on a web or mobile interface.
- **Remote Data Logging**: Create systems for monitoring and analytics in agriculture, industry, or home automation.

---

## 🛠️ Features

- **ESP32 HTTP Communication**: Send sensor data to a MySQL database using **HTTP POST** and retrieve data with **HTTP GET**.
- **Structured REST API**: PHP-based API with clear endpoints for database operations.
- **Scalable Backend**: Easily extend the API for additional sensors or functionality.
- **Beginner-Friendly**: Step-by-step video guides in Hindi with detailed explanations.
- **Extensible Design**: Adaptable for other sensors (e.g., DHT11, BMP180) or frontend dashboards.
- **Open-Source**: Free to use and modify for educational purposes.

---

## 🧰 Tech Stack

| Component            | Description                                           |
|---------------------|-------------------------------------------------------|
| **Microcontroller** | ESP32 (NodeMCU, DevKit, or any ESP32 variant)         |
| **Programming**     | Arduino IDE with C++ for ESP32 programming            |
| **Backend**         | PHP for REST API development                         |
| **Database**        | MySQL for storing and retrieving IoT data             |
| **Frontend**        | Optional web dashboard (HTML/CSS/JavaScript)          |
| **Network**         | Wi-Fi for ESP32 internet connectivity                |
| **Tools**           | XAMPP/WAMP for local PHP and MySQL testing           |

---

## 📂 Repository Contents

| Folder/File         | Description                                                                 |
|---------------------|-----------------------------------------------------------------------------|
| `/ESP32/`           | Arduino sketches (`.ino`) for ESP32 to interact with the REST API           |
| `/api/`             | PHP scripts for REST API endpoints (e.g., `fetchjsonapi.php`, `insertpostapi.php`) |
| `/db/`              | SQL file (`database.sql`) to create the MySQL database and tables           |
| `/examples/`        | Example code for specific use cases (e.g., integrating DHT11 sensor)        |
| `README.md`         | This detailed documentation file                                           |
| `LICENSE`           | License file for open-source usage                                         |

---

## 🔗 API Endpoints Overview

The REST API is hosted at **[https://yaranaiotguru.in/tutorial/](https://yaranaiotguru.in/tutorial/)** for demonstration purposes. Below are the available endpoints and their functionality:

| Method | Endpoint                              | Description                                           |
|--------|---------------------------------------|-------------------------------------------------------|
| **GET** | `/tutorial/fetchjsonapi.php`          | Retrieves data from the MySQL database as JSON        |
| **GET** | `/tutorial/fetchpayloadapi.php`       | Returns structured payload data from the database     |
| **GET** | `/tutorial/insertgetapi.php`          | Inserts data into the database using URL parameters  |
| **POST**| `/tutorial/insertpostapi.php`         | Inserts data into the database using HTTP POST       |
| **GET** | `/tutorial/config.php`                | Database configuration file (not for public use)      |

### Example API Usage

1. **Fetch Data (GET Request)**  
   ```http
   GET https://yaranaiotguru.in/tutorial/fetchjsonapi.php
   ```
   **Response (JSON):**  
   ```json
   [
       {"id": 1, "sensor_value": 25.5, "timestamp": "2025-05-06 10:00:00"},
       {"id": 2, "sensor_value": 26.0, "timestamp": "2025-05-06 10:01:00"}
   ]
   ```

2. **Insert Data (POST Request)**  
   ```http
   POST https://yaranaiotguru.in/tutorial/insertpostapi.php
   Content-Type: application/json
   Body: {"sensor_value": 27.5}
   ```
   **Response:**  
   ```json
   {"status": "success", "message": "Data inserted successfully"}
   ```

> ⚠️ **Important Note**: The hosted APIs are for **educational purposes only**. Do not overload or abuse the endpoints. For production use, deploy the API on your own local or cloud server.

---

## 🛠️ Setup Instructions

Follow these detailed steps to set up the project from scratch:

### 📋 Prerequisites
- **Hardware**:
  - ESP32 board (e.g., NodeMCU ESP32, DevKit V1, or any ESP32 variant)
  - USB cable (Type-A to Micro-USB or USB-C, depending on the board)
  - Optional: Sensors (e.g., DHT11, BMP180, or MQ135) for real-world data collection
- **Software**:
  - [Arduino IDE](https://www.arduino.cc/en/software) (version 2.x or later recommended)
  - [XAMPP](https://www.apachefriends.org/) or [WAMP](http://www.wampserver.com/en/) for local PHP and MySQL development
  - Web browser (e.g., Chrome, Firefox) or [Postman](https://www.postman.com/) for API testing
- **Arduino Libraries** (Install via Arduino IDE Library Manager):
  - `WiFi.h` (included with ESP32 board package)
  - `HTTPClient.h` (included with ESP32 board package)
  - Optional: `DHT.h` (for DHT11/DHT22 sensors, install via Library Manager)
- **Internet**:
  - Stable Wi-Fi network for ESP32 connectivity
  - Access to a local or cloud server for hosting the PHP API (if not using the demo API)

### 🚀 Step-by-Step Setup

1. **Set Up the MySQL Database**:
   - Install **XAMPP** or **WAMP** on your computer.
   - Start the Apache and MySQL services in the XAMPP/WAMP control panel.
   - Open **phpMyAdmin** in a browser (typically at `http://localhost/phpmyadmin`).
   - Create a new database named `iot_data`:
     - Click **New** in phpMyAdmin, enter `iot_data`, and click **Create**.
   - Import the `/db/database.sql` file to create the required tables:
     - In phpMyAdmin, select the `iot_data` database, go to the **Import** tab, choose the `database.sql` file, and click **Go**.
   - Update the database credentials in `/api/config.php`:
     ```php
     <?php
     $host = "localhost";
     $user = "root";
     $password = ""; // Default is empty for XAMPP/WAMP
     $database = "iot_data";
     $conn = mysqli_connect($host, $user, $password, $database);
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }
     ?>
     ```

2. **Deploy the PHP REST API**:
   - Copy the `/api/` folder to your XAMPP/WAMP `htdocs` directory (e.g., `C:\xampp\htdocs\tutorial`).
   - Ensure Apache and MySQL services are running in the XAMPP/WAMP control panel.
   - Test the API endpoints in a browser or Postman:
     - Example: `http://localhost/tutorial/fetchjsonapi.php` (should return JSON data).
     - Example: `http://localhost/tutorial/insertpostapi.php` (test with a POST request in Postman).
   - If hosting on a cloud server, upload the `/api/` folder to your server’s web root (e.g., `/var/www/html/`) and update the API URLs in the ESP32 code.

3. **Program the ESP32**:
   - Install the **ESP32 board package** in Arduino IDE:
     - Go to **File > Preferences**, and in **Additional Boards Manager URLs**, add:
       ```
       https://raw.githubusercontent.com/espressif/arduino-esp32/master/package_esp32_index.json
       ```
     - Go to **Tools > Board > Boards Manager**, search for `esp32`, and install the **ESP32 by Espressif Systems** package.
   - Open the `/ESP32/main.ino` sketch in Arduino IDE.
   - Update the Wi-Fi credentials and API endpoint in the code:
     ```cpp
     const char* ssid = "your_wifi_ssid";
     const char* password = "your_wifi_password";
     const char* serverName = "https://yaranaiotguru.in/tutorial/insertpostapi.php";
     ```
   - Connect the ESP32 to your computer via USB.
   - In Arduino IDE, select the correct board (e.g., **ESP32 Dev Module**) and port under **Tools > Board** and **Tools > Port**.
   - Upload the sketch to the ESP32 by clicking the **Upload** button.

4. **Test the System**:
   - Open the **Serial Monitor** in Arduino IDE (`Tools > Serial Monitor`, set baud rate to `115200`).
   - Verify that the ESP32 connects to Wi-Fi and sends/receives data to/from the API:
     - Look for messages like `WiFi connected` or `Data inserted successfully`.
   - Check the MySQL database in phpMyAdmin to confirm that data is being inserted into the `sensor_data` table.
   - Use a browser or Postman to fetch data from `http://localhost/tutorial/fetchjsonapi.php` or the hosted API (`https://yaranaiotguru.in/tutorial/fetchjsonapi.php`).

### 📷 Example Circuit (Optional)
If using a sensor like **DHT11** for temperature and humidity:
- **Connections**:
  - DHT11 VCC → ESP32 3.3V
  - DHT11 GND → ESP32 GND
  - DHT11 Data → ESP32 GPIO 4 (configurable in the Arduino code)
- **Schematic** (ASCII representation):
  ```
  ESP32         DHT11
  3.3V  ----    VCC
  GND   ----    GND
  GPIO4 ----    DATA
  ```
- **Note**: Add a 4.7k–10k pull-up resistor between DHT11 VCC and Data pins if required.

---

## 📸 Screenshots

1. **ESP32 Serial Monitor Output**:
   ```
   Connecting to WiFi...
   WiFi connected. IP address: 192.168.1.100
   Sending POST request...
   Response: {"status": "success", "message": "Data inserted successfully"}
   ```

2. **MySQL Database (phpMyAdmin)**:
   - **Table**: `sensor_data`
   - **Columns**:
     - `id`: Auto-incrementing primary key
     - `sensor_value`: Float (e.g., temperature or humidity)
     - `timestamp`: Datetime (e.g., `2025-05-06 10:00:00`)

3. **API Response in Browser**:
   - URL: `https://yaranaiotguru.in/tutorial/fetchjsonapi.php`
   - Output: JSON data as shown in the **API Usage** section.

---

## 🛠️ Troubleshooting

| Issue                              | Solution                                                                 |
|------------------------------------|--------------------------------------------------------------------------|
| **ESP32 fails to connect to Wi-Fi**| Verify SSID and password; ensure ESP32 is within Wi-Fi range; restart router. |
| **HTTP request fails**             | Check API URL; ensure server is running; verify ESP32 internet connectivity. |
| **MySQL connection error**         | Confirm credentials in `config.php`; ensure MySQL service is running in XAMPP/WAMP. |
| **No data in database**            | Verify POST request payload; check table structure in `database.sql`; test API manually. |
| **Arduino IDE upload error**       | Select correct board/port; install ESP32 board package; check USB cable and drivers. |

For detailed troubleshooting, refer to the YouTube playlist or comment on the videos for assistance.

---

## 🙋‍♂️ About the Author

**Mr. Abhishek Maurya**  
Creator of the **Yarana IoT Guru** YouTube channel, dedicated to making IoT, embedded systems, and electronics accessible to beginners and hobbyists worldwide. Abhishek is passionate about teaching through hands-on projects, clear explanations, and practical examples.

- **YouTube**: [Yarana IoT Guru](https://www.youtube.com/@YaranaIoTGuru)  
- **Website**: [https://yaranaiotguru.in](https://yaranaiotguru.in)  
- **Email**: Contact via the website for inquiries, collaborations, or support.

🔗 **Subscribe** to the Yarana IoT Guru YouTube channel for more IoT tutorials, projects, and updates!

---

## 📃 License

This project is licensed under the **MIT License**. It is free to use, modify, and distribute for **educational and non-commercial purposes**. See the `LICENSE` file in the repository for full details.

---

## 💬 Feedback & Contribution

We welcome your feedback and contributions to improve this project!

- **Issues**: Report bugs, suggest improvements, or ask questions by opening an issue on this repository.
- **Pull Requests**: Contribute by adding new features, fixing bugs, or enhancing documentation through pull requests.
- **Questions**: Comment on the YouTube video series or raise an issue for project-related doubts.
- **Community**: Join the Yarana IoT Guru community on YouTube to connect with other learners and share your projects.

✅ **Star ⭐ this repository** if you found it helpful, and share it with others to spread the knowledge!

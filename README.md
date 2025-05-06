# Parking App

A simple web-based parking management system for Campus.  
Users can view parking spot availability, and (optionally) reserve a spot based on vehicle type and accessibility needs.

##  Features

- Model parking lot status display
- User registration & login
- Vehicle type selection (normal, electric)
- Accessible parking support (with proof upload)
- Reservation system (prototype only)
- Live refresh of parking availability

##  Known Limitations

- Reservation can be overridden because real-world enforcement (like physical signage) is not implemented
- Reservation system was removed from final version based on UAT feedback

##  Technologies Used

- HTML / CSS / JavaScript
- PHP (for backend)
- Local JSON or database simulation for parking data

##  Getting Started

To run locally:

1. Clone this repository  
2. Place it in a local server environment (e.g., [XAMPP](https://www.apachefriends.org/) or [MAMP](https://www.mamp.info/))
3. Ensure `get_parking_status.php` is reachable by HTTP
4. Open `index.html` in a browser via localhost

##  Project Purpose

This project was developed as part of CPS5100 coursework to explore real-world user interaction design, session state management, and dynamic frontend updates.

##  Team

- Chin-Chien Lin
- Brodie Berger, Max Kaiser,and Christian Rasmussen

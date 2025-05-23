# Contact form

This solution was built based on ACCE10X requirements. A simple -**mobile-based QR Code Contact Form**- to collect and store user information, for events. 

### Built with

- HTML5
- CSS3
- JAVASCRIPT
- PHP

### Features

- **Responsive Design** for mobile and desktop.
- **Unique UI elements** floating labels, smooth animations.
- **Custom validations** like validating phone numbers.
- **Success pop-up message** instead of redirecting.
- **Email field** for user contact.
- **Subject field** to understand the purpose of contact.
- **Message field** for detailed user input.
- **Real-time character counter** for the message field.
- **Dropdown/Select field** (e.g., “Reason for Contact”).
- **Checkbox for consent** (GDPR compliance).
- **Validation for all fields** (with helpful tooltips).

### How It Works

1. User scans the **QR code** and is redirected to the form.
2. User fills the form and **submits**.
3. Data is sent to `submit.php` using **AJAX**.
4. If successful, the **success pop-up** is displayed. Otherwise, an alert shows an error message.
5. Data is saved to the **MySQL database**.


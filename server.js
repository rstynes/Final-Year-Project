const express = require('express');
const nodemailer = require('nodemailer');
const crypto = require('crypto');
const path = require('path');

const app = express();
const PORT = 3000;

app.use(express.json());

// Nodemailer setup
const transporter = nodemailer.createTransport({
  service: 'Hotmail',
  auth: {
    user: 'robertstynes@hotmail.com',
    pass: 'Dragonball117?',
  },
});

// Serve static files
app.use(express.static(path.join(__dirname, 'public')));

// Forgot password route
app.post('/forgot-password', (req, res) => {
  const { email } = req.body;

  // Check if email is provided
  if (!email) {
    return res.status(400).send('Email is required');
  }

  // Generate reset token
  const token = crypto.randomBytes(20).toString('hex');

  // Send password reset email
  const mailOptions = {
    to: email,
    from: 'robertstynes@hotmail.com',
    subject: 'Password Reset',
    text: "You are receiving this because you (or someone else) have requested the reset of the password for your account.\n\n"
      + "Please click on the following link, or paste this into your browser to complete the process:\n\n"
      + "http://localhost/reset-password?token=${token}\n\n"
      + "If you did not request this, please ignore this email and your password will remain unchanged.\n",
  };

  transporter.sendMail(mailOptions, (err) => {
    if (err) {
      console.error(err);
      return res.status(500).send('Failed to send password reset email');
    }
    res.send('Password reset email sent');
  });
});

app.listen(PORT, () => {
  console.log(`Server started on port ${PORT}`);
});


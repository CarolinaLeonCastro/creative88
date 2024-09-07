import express from "express";
import path from "path";
import nodemailer from "nodemailer";

const app = express();

// Middleware pour parser les requêtes JSON
app.use(express.json());

// Middleware pour servir les fichiers statiques
app.use(express.static(path.join(__dirname, "public")));

// Configuration du transporteur Nodemailer pour OVH
const transporter = nodemailer.createTransport({
  host: "ssl0.ovh.net", // Serveur SMTP d'OVH
  port: 465, // Port pour le SSL
  secure: true, // Utiliser le SSL
  auth: {
    user: "hello@creative88.be", // Votre email OVH
    pass: "kwCQDUMs77HcxEa", // Votre mot de passe email
  },
});

// Route pour traiter les requêtes du formulaire
app.post("/send-message", async (req, res) => {
  const { fullName, email, phone, reason, message } = req.body;

  const mailOptions = {
    from: '"Nom de votre site" <votre.email@votredomaine.com>', // L'adresse email de l'expéditeur
    to: "hello@creative88.be", // L'adresse email de destination (où vous voulez recevoir les messages)
    subject: `New Contact Request from ${fullName}`,
    text: `
            Name: ${fullName}
            Email: ${email}
            Phone: ${phone}
            Reason: ${reason}
            Message: ${message}
        `,
    html: `
            <p><strong>Name:</strong> ${fullName}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Phone:</strong> ${phone}</p>
            <p><strong>Reason:</strong> ${reason}</p>
            <p><strong>Message:</strong><br>${message}</p>
        `,
  };

  try {
    await transporter.sendMail(mailOptions);
    res.json({ message: "Message sent successfully!" });
  } catch (error) {
    console.error("Error sending email:", error);
    res.status(500).json({ message: "Failed to send message" });
  }
});

// Démarrer le serveur
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});

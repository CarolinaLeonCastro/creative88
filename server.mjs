import express from "express";
import path from "path";
import fetch from "node-fetch"; // Pour faire des requêtes HTTP vers Discord

const app = express();

// Middleware pour parser les requêtes JSON
app.use(express.json());

// Middleware pour servir les fichiers statiques
app.use(express.static(path.join(process.cwd(), "public")));

// Route pour traiter les requêtes du formulaire
app.post("/send-message", async (req, res) => {
  const { fullName, email, phone, reason, message } = req.body;

  // Créer le message pour Discord
  const discordMessage = {
    content: `**New Contact Request**\n**Name:** ${fullName}\n**Email:** ${email}\n**Phone:** ${phone}\n**Reason:** ${reason}\n**Message:** ${message}`,
  };

  try {
    // Envoyer la requête POST à Discord
    const response = await fetch(
      "https://discord.com/api/webhooks/1270801475584393297/tzSYkHpUexe_xSvvQYIswabKLlLNR2bRDU-aMDRR9lCNNtzqDh6JN_SosvEBoQA7mwKi",
      {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(discordMessage),
      }
    );

    if (response.ok) {
      res.json({ message: "Message sent successfully!" });
    } else {
      res.status(500).json({ message: "Failed to send message" });
    }
  } catch (error) {
    console.error("Error:", error);
    res.status(500).json({ message: "An error occurred" });
  }
});

// Démarrer le serveur
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});

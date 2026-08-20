const express = require('express');
const path = require('path');
const app = express();
const PORT = 3000;

// Middleware to serve static files (CSS, JS, Images) from a folder named "public"
app.use(express.static(path.join(__dirname, 'public')));

// Serve a specific HTML file at the root URL
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}`);
});

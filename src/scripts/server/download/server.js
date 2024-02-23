const express = require('express');
const { get } = require('http');
const path = require('path');
const app = express();

// Serve static files from the 'src' directory
app.use(express.static(path.join(__dirname, '..', '..', '..')));

// Define route to handle file download
app.get('/download/:fileName', (req, res) => {
    const fileName = req.params.fileName;
    const filePath = path.join(__dirname, '..', '..', '..', 'Books', fileName);
    res.download(filePath, fileName);
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});

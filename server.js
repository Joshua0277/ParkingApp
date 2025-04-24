import express from 'express';
import cors from 'cors';

const app = express();
app.use(cors());
app.use(express.static('public'));

// Test data for different campuses
const testData = {
  'main-north': {
    parking_spots: [
      {"id": 1, "status": "available"},
      {"id": 2, "status": "occupied"},
      {"id": 3, "status": "available"},
      {"id": 4, "status": "occupied"},
      {"id": 5, "status": "available"},
      {"id": 6, "status": "occupied"},
      {"id": 7, "status": "available"},
      {"id": 8, "status": "occupied"},
      {"id": 9, "status": "available"},
      {"id": 10, "status": "available"}
    ]
  },
  'main-central': {
    parking_spots: [
      {"id": 11, "status": "available"},
      {"id": 12, "status": "available"},
      {"id": 13, "status": "occupied"},
      {"id": 14, "status": "available"},
      {"id": 15, "status": "occupied"}
    ]
  },
  'main-south': {
    parking_spots: [
      {"id": 16, "status": "occupied"},
      {"id": 17, "status": "available"},
      {"id": 18, "status": "available"},
      {"id": 19, "status": "occupied"},
      {"id": 20, "status": "available"}
    ]
  },
  'liberty': {
    parking_spots: [
      {"id": 21, "status": "available"},
      {"id": 22, "status": "occupied"},
      {"id": 23, "status": "available"}
    ]
  },
  'east': {
    parking_spots: [
      {"id": 24, "status": "occupied"},
      {"id": 25, "status": "available"},
      {"id": 26, "status": "available"},
      {"id": 27, "status": "occupied"}
    ]
  }
};

app.get('/api/parking-status', (req, res) => {
  const campus = req.query.campus || 'main-north';
  res.json(testData[campus] || testData['main-north']);
});

const port = 3000;
app.listen(port, () => {
  console.log(`Server running on http://localhost:${port}`);
});
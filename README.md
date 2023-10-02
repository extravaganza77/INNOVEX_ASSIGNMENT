# INNOVEX_ASSIGNMENT
## Start the Yii2 development server:

```bash
Copy code
php yii serve
Open your web browser and access the application at http://localhost:8080 (or the URL displayed by the Yii2 server).
```

## Usage
## Administrator Functions
Visit http://localhost:8080/admin to access the admin panel.
Log in with your admin credentials.
Create product request records, specify details, and set closing times.
View bids submitted by bidders.

## Bidder Functions
Visit http://localhost:8080/bidder to access the bidder panel.
Log in with your bidder credentials.
View available product requests.
Review requests and submit bids.
Automated Bidding Selection
The system automatically selects the best bid by amount.
Bidding status is updated to "Closed" when the 15-minute bidding period expires.

## Contributing
If you'd like to contribute to this project, please follow these steps:

Fork the repository.
Create a new branch for your changes: git checkout -b feature/your-feature-name.
Commit your changes and push to your fork: git push origin feature/your-feature-name.
Create a pull request to merge your changes into the main repository.

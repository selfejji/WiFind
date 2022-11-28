--Entity Creation

CREATE TABLE IF NOT EXISTS Users (
	userID serial PRIMARY KEY,
	userName VARCHAR(50) NOT NULL,
	userEmail VARCHAR(50) NOT NULL,
	userPasword VARCHAR(50) NOT NULL,
	country VARCHAR(50) NOT NULL,
	state VARCHAR(50) NOT NULL,
	city VARCHAR(50) NOT NULL,
	zip INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Listings (
	listingID serial PRIMARY KEY,
	sellerName VARCHAR(50) NOT NULL,
	listingUpload VARCHAR(50) NOT NULL,
	listingDownload VARCHAR(50) NOT NULL,
	listingRate VARCHAR(50) NOT NULL,
	listingCountry VARCHAR(50) NOT NULL,
	listingState VARCHAR(50) NOT NULL,
	listingCity VARCHAR(50) NOT NULL,
	listingZip INT NOT NULL,
	listingStreet VARCHAR(50) NOT NULL

);

--Relation Creation
CREATE TABLE IF NOT EXISTS Purchases(
	userID serial NOT NULL,
	listingID serial NOT NULL,
	PRIMARY KEY (userID, listingID),
	FOREIGN KEY (userID)
      REFERENCES Users (userID),
   FOREIGN KEY (distingID)
      REFERENCES Listings (listingID) 
);

--Table Inserts
INSERT INTO Users VALUES
	(1, 'John Doe', 'johndoe@gmail.com', '1234johndoe', 'USA', 'Georgia', 'Atlanta', 30022),
	(2, 'Mike Smith', 'mikesmith@gmail.com', 'mikesmith678', 'USA', 'Georgia', 'Cumming', 30040),
	(3, 'Josh Alexander', 'joshalex@gmail.com', 'josh_alex123', 'USA', 'Georgia', 'Atlanta', 30022),
	(4, 'Tim Roberts', 'timroberts@gmail.com', 'timroberts000', 'USA', 'Georgia', 'Macon', 31201),
	(5, 'Jeff Douglas', 'jeffdouglas@gmail.com', '000jeffdoug', 'USA', 'Georgia', 'Atlanta', 30022);

INSERT INTO Listings VALUES
	(1, 'WiFi King', '300 Mbps', '200 Mbps', '$5/Minute', 'USA', 'Georgia', 'Atlanta', 30022, '123 Beach St'),
	(2, 'Adams WiFi', '50 Mbps', '25 Mbps', '$0.83/Minute', 'USA', 'Georgia', 'Atlanta', 30022, '456 Lakeview Rd'),
	(3, 'Wills WiFi', '100 Mbps', '50 Mbps', '$1.66/Minute', 'USA', 'Georgia', 'Atlanta', 30022, '789 Rockyroad Cir'),
	(4, 'Wonderous WiFi', '250 Mbps', '150 Mbps', '$4.17/Minute', 'USA', 'Georgia', 'Cumming', 30040, '1863 Peachtree Rd'),
	(5, 'Jills WiFi', '10 Mbps', '10 Mbps', '$0.33/Minute', 'USA', 'Georgia', 'Macon', 31201, '2354 Old Atlanta Blvd'),
	(6, 'Steves WiFi', '1 Gbps', '1 Gbps', '$16.67/Minute', 'USA', 'Georgia', 'Macon', 31201, '0984 Market Center St');

INSERT INTO Purchases VALUES
	(1, 1),
	(2, 3),
	(3, 1),
	(5, 2),
	(4, 6);



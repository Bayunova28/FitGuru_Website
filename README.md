# Fit Guru

## Table of Contents
* [Background](#background)
* [Requirement](#requirement)
* [Feature](#feature)
* [Creator](#creator)

## Background
<img src="https://github.com/Bayunova28/Fit-Guru/blob/master/figuru-cover.png" height="600" width="1000">

<p align="justify">FitGuru is a website that brings new innovations in the world of fitness by bringing features that provide many benefits for users to track their 
health and physical fitness patterns. FitGuru is designed to help users achieve their desired goals and bring understanding of the importance of healthy living through 
unique ways. That way, it indirectly provides a special attraction for millennials to join as members of FitGuru. FitGuru was founded in 2019 with the aim of being a 
model healthcare service digital technology that aims to provide modern health services and education to user. FitGuru is passionate about providing health benefits to 
users and ready to be a pioneer in the advancement of the health and sports sector in the sector information and technology.<p> 

## Requirement
### Database
<img src="https://github.com/Bayunova28/Fit-Guru/blob/master/erd-database.png" height="700" width="1000">
  
```mysql
#create database FitGuru
CREATE DATABASE FitGuru;
  
-- create table product
CREATE TABLE Product (
  Product_Id INT NOT NULL PRIMARY KEY,
  Product_Category VARCHAR(50) NOT NULL,
  Product_Name VARCHAR(50) NOT NULL);

-- create table admin
CREATE TABLE Admin (
  Id_Admin INT NOT NULL PRIMARY KEY,
  Admin_Name VARCHAR(50) NOT NULL,
  Admin_JK VARCHAR(10) NOT NULL,
  Admin_Salary INT NOT NULL);
  
-- create table subscription
CREATE TABLE Subscription (
  Subscription_Id INT NOT NULL PRIMARY KEY,
  Status_Name VARCHAR(50) NOT NULL);
 
-- create table User
CREATE TABLE Invoice (
  Id_User INT NOT NULL PRIMARY KEY,
  Subscription_Id INT NOT NULL,
  Nama VARCHAR(30) NOT NULL,
  Umur CHAR(2) NOT NULL,
  Jenis Kelamin VARCHAR(10) NOT NULL,
  Alamat TEXT NOT NULL,
  Tinggi Badan CHAR(3) NOT NULL,
  Berat Badan CHAR(2) NOT NULL,
  FOREIGN KEY (Subscription_Id) REFERENCES Subscription(Subscription_Id));
  
-- create table invoice
CREATE TABLE Invoice (
  Id_Invoice INT NOT NULL PRIMARY KEY,
  Product_Id INT NOT NULL,
  Id_User INT NOT NULL,
  Id_Admin INT NOT NULL,
  Date DATETIME,
  FOREIGN KEY (Product_Id) REFERENCES Product(Product_Id),
  FOREIGN KEY (Id_User) REFERENCES User(Id_User),
  FOREIGN KEY (Id_Admin) REFERENCES Admin(Id_Admin));
  
-- create table workout
CREATE TABLE Workout (
  Workout_Id INT NOT NULL PRIMARY KEY,
  Subscription_Id INT NOT NULL,
  Workout_Name VARCHAR(30) NOT NULL,
  Workout_Category VARCHAR(30) NOT NULL,
  FOREIGN KEY (Subscription_Id) REFERENCES Subscription(Subscription_Id));
```
## Feature
* Mobile Responsive
* Login Logout
* Signup
* CRUD Database (Create, Read, Update & Delete)
* Product
* Security On All Page
* Admin Page and User Page
* Tutorial Video
* Contact
* Informative articles of sports
  
## Creator
* Andre Billy
* Christofer Miko Lee
* Nicholas Tjayadi
* Thendy Rhenaldy
* Willibrordus Bayu

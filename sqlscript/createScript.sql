drop table if exists Accounts;
drop table if exists OrderDetails;
drop table if exists Orders;
drop table if exists Stores;
drop table if exists Products;

create table Accounts
(
	Id int generated always as identity,
	Username varchar(50) not null,
	Password varchar(50) not null,
	constraint Accounts_PK_Id primary key (Id),
	constraint Accounts_UQ_Username unique (Username)
);
create table Stores
(
	Id int generated always as identity,
	Name text not null,
	constraint Stores_PK_Id primary key (Id),
	constraint Stores_UQ_Id unique (Name)
);
create table Products
(
	Id int generated always as identity,
	Name text not null,
	UnitPrice int not null,
	constraint Products_PK_Id primary key (Id),
	constraint Products_CK_UnitPrice check (UnitPrice > 0)
);
create table Orders
(
	Id int generated always as identity,
	StoreId int not null,
	Date timestamp default NOW(),
	constraint Orders_PK_Id primary key (Id),
	constraint Orders_FK_StoreID foreign key (StoreId) references Stores(Id)
);
create table OrderDetails
(
	OrderId int not null,
	ProductId int not null,
	UnitPrice int not null,
	Discount int default 0,
	constraint OrderDetails_PK_OrderId_ProductId primary key (OrderId, ProductId),
	constraint OrderDetails_CK_UnitPrice check (UnitPrice > 0),
	constraint OrderDetails_CK_Discount check (Discount >= 0)
);





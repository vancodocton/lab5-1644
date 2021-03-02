-- drop table if exists AccountRoles;
-- create table AccountRoles
-- (
-- 	AccountId int not null,
-- 	RoleId int not null,
-- 	constraint AccountRoles_PK primary key (AccountId, RoleId),
-- 	constraint AccountRoles_FK_AccountId foreign key (AccountId) references Accounts(Id),
-- 	constraint AccountRoles_FK_RoleId foreign key (RoleId) references Roles(Id)
-- );

drop table if exists OrderDetails;
drop table if exists Orders;
drop table if exists Stores;
drop table if exists Accounts;
drop table if exists Roles;
drop table if exists CompanyInventory;
drop table if exists StoreInventory;
drop table if exists Products;

create table Roles
(
	Id int generated always as identity,
	Name varchar(50) not null,
	PathAcess text not null,
	constraint Roles_PK_Id primary key (Id),
	constraint Roles_UK_Name unique (name)
);
create table Accounts
(
	Id int generated always as identity,
	Username varchar(50) not null,
	Password varchar(50) not null,
	RoleId int not null,
	constraint Accounts_PK_Id primary key (Id),
	constraint Accounts_UQ_Username unique (Username),
	constraint AccountRoles_FK_RoleId foreign key (RoleId) references Roles(Id)
);
create table Stores
(
	Id int generated always as identity,
	Name text not null,
	ManagerAccountID int,
	constraint Stores_PK_Id primary key (Id),
	constraint Stores_UQ_Id unique (Name),
	constraint Stores_FK_Id foreign key (ManagerAccountID) references Accounts(Id)
);
create table Products
(
	Id int generated always as identity,
	Name text not null,
	UnitPrice int not null,
	constraint Products_PK_Id primary key (Id),
	constraint Products_CK_UnitPrice check (UnitPrice > 0)
);
create table CompanyInventory
(
	ProductId int not null,
	Quantity int not null,
	Time timestamp not null,
	constraint CompanyInventory_PK_ProductId primary key (ProductId),
	constraint CompanyInventory_FK_ProductId foreign key (ProductId) references Products(Id)
);
create table StoreInventory
(
	ProductId int not null,
	StoreId int not null,
	Quantity int not null,
	Time timestamp not null,
	constraint StoreInventory_PK_ProductId primary key (ProductId, StoreId),
	constraint StoreInventory_FK_ProductId foreign key (ProductId) references Products(Id),
	constraint StoreInventory_FK_StoreID foreign key (StoreId) references Stores(Id)
);
-- create table Orders
-- (
-- 	Id int generated always as identity,
-- 	StoreId int not null,
-- 	Date timestamp default NOW(),
-- 	constraint Orders_PK_Id primary key (Id),
-- 	constraint Orders_FK_StoreID foreign key (StoreId) references Stores(Id)
-- );
-- create table OrderDetails
-- (
-- 	OrderId int not null,
-- 	ProductId int not null,
-- 	UnitPrice int not null,
-- 	Discount int default 0,
-- 	constraint OrderDetails_PK_OrderId_ProductId primary key (OrderId, ProductId),
-- 	constraint OrderDetails_CK_UnitPrice check (UnitPrice > 0),
-- 	constraint OrderDetails_CK_Discount check (Discount >= 0)
-- );







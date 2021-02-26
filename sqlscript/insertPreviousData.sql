insert into Roles (Name, PathAcess) values ('Company Highe Manager', 'com');
insert into Roles (Name, PathAcess) values('Toy Store Manager', 'store');

insert into Accounts (Username, Password, RoleId) values ('admin1', '123456', 1);
insert into Accounts (Username, Password, RoleId) values ('admin2', '123123', 1);
insert into Accounts (Username, Password, RoleId) values ('staff1', 'zxczxc', 2);
insert into Accounts (Username, Password, RoleId) values ('staff2', 'zxczxc', 2);
insert into Accounts (Username, Password, RoleId) values ('staff3', 'asdasd', 2);
insert into Accounts (Username, Password, RoleId) values ('staff4', 'qweqwe', 2);

-- insert into AccountRoles (AccountId, RoleId) values (1,1);
-- insert into AccountRoles (AccountId, RoleId) values (1,2);
-- insert into AccountRoles (AccountId, RoleId) values (2,1);
-- insert into AccountRoles (AccountId, RoleId) values (3,2);
-- insert into AccountRoles (AccountId, RoleId) values (4,2);
-- insert into AccountRoles (AccountId, RoleId) values (5,2);
-- insert into AccountRoles (AccountId, RoleId) values (6,2);

insert into Stores (Name, ManagerAccountID) values ('Danang Store', 3);
insert into Stores (Name, ManagerAccountID) values ('Hanoi Store', 4);
insert into Stores (Name, ManagerAccountID) values ('Saigon Store', 5);
insert into Stores (Name, ManagerAccountID) values ('Cantho Store', 6);

insert into Products (Name, UnitPrice) values ('toll', 10);
insert into Products (Name, UnitPrice) values ('model car', 15);
insert into Products (Name, UnitPrice) values ('model motorcycle', 12);
insert into Products (Name, UnitPrice) values ('model plane', 17);
insert into Products (Name, UnitPrice) values ('model helicopter', 20);
insert into Products (Name, UnitPrice) values ('remote control call', 30);
insert into Products (Name, UnitPrice) values ('remote control plane', 35);
insert into Products (Name, UnitPrice) values ('remote control helicopter', 40);

insert into CompanyInventory (ProductId, Quantity, Time) values (1, 20, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (2, 10, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (3, 30, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (4, 12, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (5, 16, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (6, 40, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (7, 42, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (8, 10, CURRENT_TIMESTAMP);

--rollback;
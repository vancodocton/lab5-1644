insert into Roles (Name) values ('Company Highe Manager');
insert into Roles (Name) values('Toy Store Manager');

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

insert into Stores (Name) values ('Danang Store');
insert into Stores (Name) values ('Hanoi Store');
insert into Stores (Name) values ('Saigon Store');

insert into Products (Name, UnitPrice) values ('toll', 10);
insert into Products (Name, UnitPrice) values ('model car', 15);
insert into Products (Name, UnitPrice) values ('model motorcycle', 12);
insert into Products (Name, UnitPrice) values ('model plane', 17);
insert into Products (Name, UnitPrice) values ('model helicopter', 20);
insert into Products (Name, UnitPrice) values ('remote control call', 30);
insert into Products (Name, UnitPrice) values ('remote control plane', 35);
insert into Products (Name, UnitPrice) values ('remote control helicopter', 40);
--rollback;
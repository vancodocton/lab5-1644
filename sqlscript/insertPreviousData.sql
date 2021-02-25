insert into Accounts (Username, Password)
values
	('admin1', '123456'),
	('admin2', '123123'),
	('staff1', 'staff'),
	('staff2', 'staff'),
	('staff3', 'staff'),
	('staff4', 'staff');
	
insert into Stores (Name)
values
	('Danang Store'),
	('Hanoi Store'),
	('Saigon Store');

insert into Products (Name, UnitPrice)
values
	('toll', 10),
	('model car', 15),
	('model motorcycle', 12),
	('model plane', 17),
	('model helicopter', 20),
	('remote control call', 30),
	('remote control plane', 35),
	('remote control helicopter', 40);
rollback;
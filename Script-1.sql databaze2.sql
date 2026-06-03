drop table if exists osoba;

create table osoba(
	id integer (50),
	jmeno VARCHAR(100),
	prijmeni VARCHAR(100),
	vek integer(50)
);
INSERT INTO osoba (jmeno, prijmeni, vek) VALUES
('Vasek', 'Padevet', '17'),
('Samko', 'Geleneky', '17'),
('Max', 'Pravda', '17'),
('Vindenc', 'Nacházel', '18'),
('Max', 'Menčík', '17'),
('Darren', 'Watkins jr.', '22'),
('Bruno', 'Ambrož', '18');



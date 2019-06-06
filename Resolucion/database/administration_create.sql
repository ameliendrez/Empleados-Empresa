-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2019-06-05 23:34:37.581

-- tables
-- Table: company
CREATE TABLE company (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    CONSTRAINT company_pk PRIMARY KEY (id)
);

INSERT INTO `company` (`id`, `name`) VALUES (1, 'Summa Solution');

-- Table: company_employee
CREATE TABLE company_employee (
    id_company int NOT NULL,
    id_employee int NOT NULL,
    CONSTRAINT company_employee_pk PRIMARY KEY (id_company,id_employee)
);

INSERT INTO company_employee (`id_company`, `id_employee`) VALUES (1, 1);
INSERT INTO company_employee (`id_company`, `id_employee`) VALUES (1, 2); 

-- Table: employee
CREATE TABLE employee (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    last_name varchar(100) NOT NULL,
    age int NOT NULL,
    type_employee int NULL,
    type_language int NULL,
    type_design int NULL,
    CONSTRAINT employee_pk PRIMARY KEY (id)
);

INSERT INTO employee (`id`, `name`, `last_name`, `age`, `type_employee`, `type_language`, `type_design`) VALUES (1, 'Agustin', 'Meliendrez', 27, 1, 1, null);
INSERT INTO employee (`id`, `name`, `last_name`, `age`, `type_employee`, `type_language`, `type_design`) VALUES (2, 'Pepe', 'Rodriguez', 40, 2, null, 1);

-- Table: type_design
CREATE TABLE type_design (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    CONSTRAINT type_design_pk PRIMARY KEY (id)
);

INSERT INTO type_design (`id`, `name`) VALUES (1,'Web');
INSERT INTO type_design (`id`, `name`) VALUES (2,'Graphic');

-- Table: type_employee
CREATE TABLE type_employee (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    CONSTRAINT type_employee_pk PRIMARY KEY (id)
);

INSERT INTO type_employee (`id`, `name`) VALUES (1,'Developer');
INSERT INTO type_employee (`id`, `name`) VALUES (2,'Designer');

-- Table: type_language
CREATE TABLE type_language (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    CONSTRAINT type_language_pk PRIMARY KEY (id)
);

INSERT INTO type_language (`id`, `name`) VALUES (1,'PHP');
INSERT INTO type_language (`id`, `name`) VALUES (2,'NET');
INSERT INTO type_language (`id`, `name`) VALUES (3,'Phyton');

-- foreign keys
-- Reference: company_company_employees (table: company_employees)
ALTER TABLE company_employees ADD CONSTRAINT company_company_employees FOREIGN KEY company_company_employees (id_company)
    REFERENCES company (id);

-- Reference: employee_company_employees (table: company_employees)
ALTER TABLE company_employees ADD CONSTRAINT employee_company_employees FOREIGN KEY employee_company_employees (id_employee)
    REFERENCES employee (id);

-- Reference: type_design_employee (table: employee)
ALTER TABLE employee ADD CONSTRAINT type_design_employee FOREIGN KEY type_design_employee (type_design)
    REFERENCES type_design (id);

-- Reference: type_employee_employee (table: employee)
ALTER TABLE employee ADD CONSTRAINT type_employee_employee FOREIGN KEY type_employee_employee (type_employee)
    REFERENCES type_employee (id);

-- Reference: type_language_employee (table: employee)
ALTER TABLE employee ADD CONSTRAINT type_language_employee FOREIGN KEY type_language_employee (type_language)
    REFERENCES type_language (id);

-- End of file.

# DemoApp

## Setup

1. Use MAMP or XAMPP or similar to create a MySQL instance running on port 8889 (or something else as long as you change it in the code).

2. Create a database called "DemoApp".

3. Create a table called todo_list. You can use the following query:

```
CREATE TABLE IF NOT EXISTS todo_list(
	id INT AUTO_INCREMENT PRIMARY KEY,
    item VARCHAR(100) NOT NULL
);
```

4. Insert something into the table like so:

```
INSERT INTO todo_list (item) VALUES ('Do Something');
```

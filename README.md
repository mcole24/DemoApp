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
5. Download the DemoApp folder into your htdocs folder. On a Mac, it will be:
`/Applications/MAMP/htdocs/DemoApp`

6. Run your server. 

7. Open the app in your browser. If MySQL is running on port 8889, the app will be on a different port, such as 8888. You would find your app by going to `localhost:8888/demoapp/index.php` for example.

# 🆔 ShoppingList

In this project we are trying to create a shopping list. In it we should be able to create articles, modify them, view them and delete them. 

---

## 🛠️🚀 Tech Stack
### **Languages**:
- HTML

### **Frameworks**:
- Laravel

### **Server**:
- XAMPP
- Apache
- Node.js

### **Database**:
- MySQL

### **Tools & Others**:
- Composer
- Postman

## 🔧⚙️ Installation

Follow these steps to install and set up the project:

- Clone the repository

```
https://github.com/Mangel111111111/Kata-ShoppingList.git
```
- Install Composer dependencies

```
composer install
```
- Install Node.js dependencies

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, change the variables you need, but it is very important to uncomment the database connection lines that are these:
 
In DB_CONNECTION will come mysqlite, change it to the bd you use (in this case MySQL)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ShoppingList
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command 
```
php artisan key:generate 
```

- Execute migrations  
```
php artisan migrate
```

## ▶️💻 Run Locally
- How to run the Laravel server  
```
php artisan serve
```

- If you want to run all this in development environment run the following command  
```
npm run dev
```

- For production you should run the following command 
```
npm run build
```

## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

```bash
<env name="DB_CONNECTION" value="sqlite"/>
<env name="DB_DATABASE" value=":memory:"/>
```

With the following command we run the tests and we will also generate a coverage report

```bash
  php artisan test --coverage-html=coverage-report
```

## 📡🌐 ShoppingList API

#### Get all products entries

```http
GET /api/products
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### Create a new product

```http
POST /api/products
```

#### Response:
- **Status Code:** 201
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `ProductName`    | `string` | **Required**. Name of product    |

#### Update an existing product by ID

```http
PUT /api/products/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `integer` | **Required**. product ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `ProductName`    | `string` | Name of product    |

#### 5 Delete a product by ID

```http
DELETE /api/products/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `integer` | **Required**. product ID     |

#### Response:
- **Status Code:** 204, 404
- **Content Type:** No-Content, application/json


## ✍️🙍 Author
**Miguel Angel García:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Mangel111111111)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](www.linkedin.com/in/miguel-garcía-lópez-609136284)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:miguelg.lopez@outlook.com)

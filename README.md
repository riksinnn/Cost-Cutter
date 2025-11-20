# Cost-Cutter Item Listing System Full Project Package (Cost-Cutter)
## 1. System Overview
Cost-Cutter is a lightweight web-based marketplace platform built with Laravel, Blade templates, and Laravel Breeze authentication. Users can register, log in, create item listings with multiple images, and manage their postings through a simple and responsive interface. The platform targets small-scale buying and selling within controlled communities such as schools, organizations, or local barangays.
Primary actors: User, Admin (optional for future features).
## 2. Functional Requirements (summary)
-User authentication via Laravel Breeze: register, login, and logout.

-Item posting with title, description, price, condition, and images (single or multiple).

-Item management: view, edit, and delete user’s own items.

-Item browsing: view all items and individual item details.

-Authorization: users can only modify or delete their own items; cannot access others’ listings.

-Responsive UI for desktop and mobile
## 3. Non-Functional Requirements
-Usability: Clean, minimal, and easy-to-navigate interface with readable forms and labels.

-Performance: Fast page loads; reasonable image upload sizes.

-Reliability: Consistent CRUD operations; proper database persistence.

-Security: Encrypted passwords, input validation, and restricted access to authenticated users.

-Maintainability: Follows Laravel MVC structure; clear folder/file organization.

-Scalability: Handles growing users and item listings without major performance degradation.

-Compatibility: Works on major browsers (Chrome, Firefox, Edge) and mobile devices.
## 4. High-Level Architecture
Classic Laravel MVC application with Blade templates for the frontend.

Backend enforces authentication, authorization, and item CRUD operations.

Database: MySQL/MariaDB (SQLite allowed for development).

Optional future enhancements: admin panel, notifications, and advanced search filters.
## 5. Data Model & ERD
Entities: users, items, item_images.

Relationships:

[users] 1---* [items] 1---* [item_images]
## 5. Laravel Structure
laravel/structure.md outlines migrations (users, items, item_images) 

Eloquent models, controllers (AuthController, ItemController), policies, and routes (web.php) 

Includes pseudocode for CRUD operations with authorization.

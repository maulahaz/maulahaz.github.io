Project Name	: SAGALANA
Project Desc	: Apps Myself as MHz profile and porfolio: 
        + Portfolio
        + Coding Tips and Tricks
        + etc
Background	: To share about me, hopefully can be a side income.
Start Date	: Sep-2020
Developer	: MHz
//
Machine		    : Codeigniter-4.0.4
DB		        : MySQL
Admin Template	: --
Home Template   : Myportfolio from Themewagon.com

Link: https://github.com/maulahaz/maulahaz.github.io.git

Standarization:
================
- Variable is using 'camel case':
  Ex. pageTitle, viewFile, jsVile, etc.

- Function name is using 'camel case':
  Ex. getUser, checkAccount, jsVile, etc.

- File name using 'dash case':
  Ex. v_list.php, js_permit.php
  * Except Controller file name. In CI, Controller Name MUST BE same with the File Name

- Folder name, for VIEW FILE, is using lowercase and single

- ID and CLASS name from html using 'dash case':
  Ex. birt_date, 

- Controller Name and Controller File Name using 'Title case' and single:
  Ex. Permit, Permit.php, Member, Member.php, etc.

- Model name is using 'Title case' with add '_mdl' and single:
  Ex. Permit_mdl.php, Member_mdl.

- Table name is using 'dash case' and plural:
  Ex. tbl_permits, tbl_keyregs, tbl_accounts, etc.

Initialization:
===============
- .env file:
    - CI_ENVIRONMENT change to development:
        CI_ENVIRONMENT = development
    - Set DB config:
        database.default.hostname = localhost
        database.default.database = permit
        database.default.username = root
        database.default.password = 
        database.default.DBDriver = MySQLi
- In any Controller:
    1. Start with Security: 
        _isAdmin(), _isAjax(), _isLoggedin(), etc.
    2. Add Library:
        $this->load->library('upload'), etc.
    3. Add variable:
        $userID = 'blah',
    4. Other
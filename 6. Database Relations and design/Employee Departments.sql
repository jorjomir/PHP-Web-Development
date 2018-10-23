select employees.employee_id, employees.first_name, employees.salary, departments.name
from employees
inner join departments on employees.department_id=departments.department_id
where employees.salary>15000
order by employees.department_id desc
limit 5
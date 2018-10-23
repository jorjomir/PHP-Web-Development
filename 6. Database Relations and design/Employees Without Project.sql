select employees.employee_id, employees.first_name 
from employees
left outer join employees_projects as ep
on employees.employee_id = ep.employee_id
where ep.project_id is null
order by employees.employee_id desc
limit 3
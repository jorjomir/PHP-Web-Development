select employees.employee_id, employees.job_title, employees.address_id, addresses.address_text
from employees
inner join addresses on employees.address_id=addresses.address_id
order by address_id 
limit 5
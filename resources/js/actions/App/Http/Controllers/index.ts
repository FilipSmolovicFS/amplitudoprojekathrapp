import Auth from './Auth'
import DashboardController from './DashboardController'
import EmployeeController from './EmployeeController'
import ContractTypeController from './ContractTypeController'
import ContractController from './ContractController'
import PositionController from './PositionController'
import EmployeeStatusController from './EmployeeStatusController'
import UserController from './UserController'
import AuditLogsController from './AuditLogsController'
const Controllers = {
    Auth: Object.assign(Auth, Auth),
DashboardController: Object.assign(DashboardController, DashboardController),
EmployeeController: Object.assign(EmployeeController, EmployeeController),
ContractTypeController: Object.assign(ContractTypeController, ContractTypeController),
ContractController: Object.assign(ContractController, ContractController),
PositionController: Object.assign(PositionController, PositionController),
EmployeeStatusController: Object.assign(EmployeeStatusController, EmployeeStatusController),
UserController: Object.assign(UserController, UserController),
AuditLogsController: Object.assign(AuditLogsController, AuditLogsController),
}

export default Controllers
import logo from './logo.svg';
import './App.css';
import Sidebar from './layouts/Sidebar';
import Topbar from './layouts/Topbar';
import "./sb-admin-2.min.css";
import Dashboard from './pages/Dashboard';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Login from './pages/Login';
import Userlist from './pages/users/Userlist';
import Portal from './pages/Portal';
import UserCreate from './pages/users/UserCreate';
import UserView from './pages/users/UserView';
import UserEdit from './pages/users/UserEdit';

// KURSUS
import Kursuslist from './pages/kursus/Courseslist';
import KursusCreate from './pages/kursus/CoursesCreate';
function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<Login />} />

        <Route path='/portal' element={<Portal />}>
          <Route path='dashboard' element={<Dashboard />} />
          <Route path='user-list' element={<Userlist />} />
          <Route path='kursus' element={<Kursuslist />} />
          <Route path='create-user' element={<UserCreate />} />
          <Route path='create-courses' element={<KursusCreate />} />
          <Route path='user-view/:id' element={<UserView />} />
          <Route path='user-edit/:id' element={<UserEdit />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;

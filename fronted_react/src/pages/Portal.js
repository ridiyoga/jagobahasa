import React from 'react'
import { Outlet } from 'react-router-dom'
import Sidebar from '../layouts/Sidebar'
import Topbar from '../layouts/Topbar'
import Userlist from './users/Userlist'

function Portal() {
  return (
    <>
      <div id="wrapper">
        <Sidebar />
        <div id="content-wrapper" className="d-flex flex-column">
          <div id="content">
            <Topbar />
            <div className='container-fluid'>
              <Outlet></Outlet>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}

export default Portal


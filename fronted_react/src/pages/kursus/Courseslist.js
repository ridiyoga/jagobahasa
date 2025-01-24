import { faUser } from '@fortawesome/free-regular-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import axios from 'axios'
import { faAdd } from '@fortawesome/free-solid-svg-icons'

function Kursuslist() {
  const [image, setImage] = useState('');
  const [coursesList, setcoursesList] = useState([]);
  const [isLoading, setLoading] = useState(true);

  useEffect(() => {
    //On Load
    getCourses();
    console.log("welcome");
  }, []);

  let getCourses = async () => {
    try {
        const courses = await axios.get("http://127.0.0.1:8000/api/courses", {
            method: 'get',
              headers: {
                  'Accept': 'application/json',
                  'Access-Control-Allow-Origin' : '*',
                  'Access-Control-Allow-Methods':'GET,PUT,POST,DELETE,PATCH,OPTIONS',  
              }
      });
      setcoursesList(courses.data);
      setLoading(false);
    } catch (error) {
      console.log(error);
    }
  }
  const handleFileChange = (e) => {
    setImage(e.target.files[0]);
}
  let handleDelete = async (id) => {
    try {
      const confirmDelete = window.confirm("Are you sure do you want to delete the data?");
      if (confirmDelete) {
        await axios.delete(`http://127.0.0.1:8000/api/delete_courses/${id}`);
        getCourses();
      }
    } catch (error) {
      console.log(error);
    }
  }

  return (
    <>
      <div className="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 className="h3 mb-0 text-gray-800">DAFTAR KURSUS</h1>
        <Link to="/portal/create-courses" className="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
          <FontAwesomeIcon icon={faAdd} className="creatinguser mr-2" />
          Tambah Kursus
        </Link>
      </div>
      {/* <!-- DataTables --> */}
      <div className="card shadow mb-4">
        <div className="card-header py-3">
          <h6 className="m-0 font-weight-bold text-primary">TABEL KURSUS</h6>
        </div>
        <div className="card-body">
          {
            isLoading ? <img src='https://media.giphy.com/media/ZO9b1ntYVJmjZlsWlm/giphy.gif' />
              : <div className="table-responsive">
                <table className="table table-bordered" id="dataTable" width="100%" cellSpacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Harga</th>
                      <th>Lavel</th>
                      <th>Program</th>
                      <th>Thunbnail</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    {coursesList.map((courses) => {
                      return (
                        <tr>
                          <td>{courses.id}</td>
                          <td>{courses.tittle}</td>
                          <td>{courses.description}</td>
                          <td>{courses.price}</td>
                          <td>{courses.level}</td>
                          <td>{courses.program}</td>
                          <td>{courses.thumbnail}</td>
                          <th>
                            <Link to={`/portal/courses-view/${courses.id}`} className='btn btn-primary btn-sm mr-1'>View</Link>
                            <Link to={`/portal/courses-edit/${courses.id}`} className='btn btn-info btn-sm mr-1'>Edit</Link>
                            <button onClick={() => handleDelete(courses.id)} className='btn btn-danger btn-sm mr-1'>Delete</button>
                          </th>
                        </tr>
                      )
                    })}
                  </tbody>
                </table>
              </div>
          }

        </div>
      </div>
    </>
  )
}

export default Kursuslist
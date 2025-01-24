import axios from 'axios';
import { useFormik } from 'formik';
import React, { useState } from 'react'
import { useNavigate } from 'react-router-dom';

function KursusCreate() {
  const [image, setImage] = useState('');
  const [data, setData] = useState('');
  const [isLoading, setLoading] = useState(false);
  const navigate = useNavigate();

  const myFormik = useFormik(
    {
      initialValues: {
        title: "",
        description: "",
        price: "",
        level: "",
        program: "",
        thumbnail: "",
      },
      // Validating Forms while entering the data
      validate: (values) => {
        let errors = {}           //Validating the form once the error returns empty else onsubmit won't work

  

        if (!values.title) {
          errors.title = "Please select any one title";
        }

        if (!values.description) {
          errors.description = "Please select any one description";
        }

        if (!values.program) {
          errors.program = "Please select any one program";
        }
        if (!values.level) {
          errors.level = "Please select any one level";
        }
        if (!values.price) {
          errors.price = "Please select any one price";
        }
        
        return errors;
      
  //one can be able to submit once the validates returns empty value (validation successful) else can't be submitted
    },onSubmit: async (values) => {
        try {
          setLoading(true);
          await axios.post("http://127.0.0.1:8000/api/courses", values);
          // navigate("/portal/get_courses");
          console.log(values);
        } catch (error) {
          alert("Validation failed");
          setLoading(false);
        }

        console.log(values);
      }

    });
    const handleFileChange = (e) => {
      setImage(e.target.files[0]);
  }
  return (
    <div className='container'>
     <div className="card shadow mb-4">
        <div className="card-header py-3">
          <h6 className="m-0 font-weight-bold text-primary">TAMBAH KURSUS</h6>
        </div>
        <div className="card-body">
      <form onSubmit={myFormik.handleSubmit} encType="multipart/form-data">
        <div className='row'>
          <div className="col-lg-12">
            <label>Judul</label>
            <input name='title' value={myFormik.values.title} onChange={myFormik.handleChange} type={"text"}
              className={`form-control ${myFormik.errors.title ? "is-invalid" : ""} `} />
            <span style={{ color: "red" }}>{myFormik.errors.title}</span>
          </div>
        </div>
        <div className='row'>
          <div className="col-lg-12">
            <label>Deskripsi</label>
            <input name='description' value={myFormik.values.description} onChange={myFormik.handleChange} type={"text"}
              className={`form-control ${myFormik.errors.description ? "is-invalid" : ""} `} />
            <span style={{ color: "red" }}>{myFormik.errors.description}</span>
          </div>
        </div>
        <div className='row'>
          <div className="col-lg-12">
            <label>Harga</label>
            <input name='price' value={myFormik.values.price} onChange={myFormik.handleChange} type={"number"}
              className={`form-control ${myFormik.errors.price ? "is-invalid" : ""} `} />
            <span style={{ color: "red" }}>{myFormik.errors.price}</span>
          </div>
        </div>
        <div className='row'>
          <div className='col-lg-12'>
            <label>Level</label>
            <select name='level' value={myFormik.values.level} onChange={myFormik.handleChange}
              className={`form-control ${myFormik.errors.level ? "is-invalid" : ""} `} >
              <option value="">----Pilih Level----</option>
              <option value="Pemula">Pemula</option>
              <option value="Madya">Madya</option>
              <option value="Mahir">Mahir </option>
            </select>
            <span style={{ color: "red" }}>{myFormik.errors.level}</span>
          </div>
          </div>
        <div className='row'>
          <div className="col-lg-12">
            <label>Program</label>
            <input name='program' value={myFormik.values.program}  onChange={myFormik.handleChange} type={"text"}
              className={`form-control ${myFormik.errors.program ? "is-invalid" : ""} `} />
            <span style={{ color: "red" }}>{myFormik.errors.program}</span>
          </div>
        </div>
        <div className='row'>
          <div className="col-lg-12">
            <label>Thumnail</label>
                <input name='thumbnail' value={myFormik.initialValues.thumbnail} onChange={handleFileChange} type={"file"} accept="image/*"
              className={`form-control`} />
          </div>
        </div>

            <div className='row'>
          <div className='col-lg-4 mt-5'>
            <input disabled={isLoading} type="submit" value={isLoading ? "Submitting..." : "Create"} className=' btn btn-primary' />
          </div>
        </div>
        </form>
      </div>
    </div>
      {/* {JSON.stringify(myFormik.values)} */}
    </div>

  );
}

export default KursusCreate
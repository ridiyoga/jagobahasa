import React from 'react'
import { Doughnut, Line } from 'react-chartjs-2'
import Card from '../components/Card'
import {
    Chart as ChartJS, ArcElement, Tooltip, Legend, CategoryScale, LinearScale, PointElement, LineElement, Title, Colors
} from 'chart.js';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faDownload } from '@fortawesome/free-solid-svg-icons';

ChartJS.register(ArcElement, Tooltip, Legend, CategoryScale, LinearScale, PointElement, LineElement, Title);

function Dashboard() {
    return (
        <>
           
            <div className="row">
                <Card title="Jumlah User" value="40,000" color="primary" />
                <Card title="Jumlah Pelajar" value="$215,000" color="success" />
                <Card title="Jumlah Kursus" value="50%" color="info" />
                <Card title="Pending Requests" value="18" color="warning" />
            </div>
        </>
    )
}

export default Dashboard
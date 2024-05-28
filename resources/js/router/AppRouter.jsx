import React from 'react'
import { Routes, Route, Navigate, BrowserRouter as Router } from 'react-router-dom'
import { HomePage } from '../museo/pages'
import { Login } from '../auth/pages'

export const AppRouter = () => {
    return (
        <Router>
            <Routes>
                <Route path="/home" element={<HomePage />} />
                <Route path="/login" element={<Login />} />
                <Route path="/*" element={<Navigate to="/home" />} />
            </Routes>
        </Router>
    )
}
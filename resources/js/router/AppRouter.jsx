import React from 'react'
import { Routes, Route, Navigate } from 'react-router-dom'
import { HomePage } from '../museo/pages'
import { Login } from '../auth/pages'

export const AppRouter = () => {
    return (
        <Routes>
            <Route path="/home" element={<HomePage />} />
            <Route path="/login" element={<Login />} />
            <Route path="/*" element={ <Navigate to="/login" /> } />
        </Routes>
    )
}
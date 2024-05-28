import { InputComponent, InputPassword } from '../../../museo/components';
import Button from '@mui/material/Button';

import './login.css';

export const Login = () => {

    return (
        <div className="body">
            <div className='componente'>
                <h1>¡Bienvenido!</h1>
                <h3>Introduce tus datos para iniciar sesión</h3>
                <img className='img-datos-usuario' src='/assets/imgs/account_circle_white.svg' />
                <div className="form">
                    <InputComponent id='filled-mail-input' label='Correo electrónico' />
                    <InputPassword id='filled-password-input' />
                    <div className="form-boton">
                        <Button
                            className='boton-enviar'
                            variant="contained"
                            sx={{
                                backgroundColor: 'rgb(38, 39, 31, 0.7)',
                                "&:hover": {
                                    backgroundColor: '#26271f'
                                },
                            }}
                        >Ingresar</Button>
                    </div>
                </div>
            </div>
        </div>
    )
}

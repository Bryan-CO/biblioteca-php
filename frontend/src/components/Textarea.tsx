import { InputTextarea } from "primereact/inputtextarea";
import "../assets/textarea.css";

interface TextareaProps {
  data?: string;
  title: string;
  disabled?: boolean;
}

export const Textarea = ({ data, title, onChange, disabled }: TextareaProps) => {
  return (
    <>
      <label htmlFor={title}>{title}</label>
      <InputTextarea
        id={title}
        value={data}
        disabled={disabled}
        rows={5}
        cols={30}
        className="form-textarea"
        onChange={onChange}
      />
    </>
  );
};

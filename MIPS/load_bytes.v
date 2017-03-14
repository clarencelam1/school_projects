`timescale 1ns / 1ps
/*
 * CSE141L Lab1: Be a Hardware Hacker!
 * University of California, San Diego
 * 
 * Written by Donghwan Jeon, 4/1/2007
 */
 
module load_bytes
(

 input [31:0] 			A_in,
 input [1:0]			shift_amount,
 input [5:0]			opcode,
 output reg [31:0]     Out_out
);		



always @(*)
	begin
	if(opcode == 6'b100000 || opcode == 6'b100100)
		begin
			case(shift_amount[1:0])
			2'b00:  
				begin
					if(opcode == 6'b100100)
						begin
							Out_out = {24'd0, A_in[7:0]};
						end
					else
						begin
							Out_out = {{24{A_in[7]}}, A_in[7:0]};
						end
				end
				
			2'b01:  
				begin
					if(opcode == 6'b100100)
						begin
							Out_out = {24'd0, A_in[15:8]};
						end
					else
						begin
							Out_out = {{24{A_in[15]}}, A_in[15:8]};
						end
				end
				
			2'b10:  
				begin
					if(opcode == 6'b100100)
						begin
							Out_out = {24'd0, A_in[23:16]};
						end
					else
						begin
							Out_out = {{24{A_in[23]}}, A_in[23:16]};
						end
				end
				
			2'b11:  
				begin
					if(opcode == 6'b100100)
						begin
							Out_out = {24'd0, A_in[31:24]};
						end
					else
						begin
							Out_out = {{24{A_in[31]}}, A_in[31:24]};
						end
				end
			default:
				begin
					Out_out = {32'bxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx};
				end
			endcase
		end	
	else
		begin  
			case(shift_amount[1:0])
			2'b00:  
				begin
					if(opcode == 6'b100101)
						begin
							Out_out = {16'd0, A_in[15:0]};
						end
					else
						begin
							Out_out = {{16{A_in[15]}}, A_in[15:0]};
						end
				end
				
			2'b10:  
				begin
					if(opcode == 6'b100101)
						begin
							Out_out = {16'd0, A_in[31:16]};
						end
					else
						begin
							Out_out = {{16{A_in[31]}}, A_in[31:16]};
						end
				end
			default:
				begin
					Out_out = {32'bxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx};
				end
			endcase
		end
	
	end
	
endmodule
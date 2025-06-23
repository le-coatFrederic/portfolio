package fred.portfolio.data.dtos;

import java.util.List;

public record EventShowDTO(
        Long id,
        String title,
        String description,
        List<SkillShowDTO> skills
) {
}
